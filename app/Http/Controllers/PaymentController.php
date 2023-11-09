<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class PaymentController extends Controller
{
    public function create(Request $request)
    {
        $params = [
            'transaction_details' => [
                'order_id' => Str::uuid(),
                'gross_amount' => $request->price,
            ],
            'item_details' => [
                [
                    'price' => $request->price,
                    'quantity' => 1,
                    'name' => $request->item_name,
                ],
            ],
            'customer_details' => [
                'first_name' => $request->customer_first_name,
                'email' => $request->input('customer_email', ''), // Set a default value if email is not available in the request
            ],
            'enabled_payments' => ['credit_card', 'bca_va', 'bni_va', 'bri_va'],
        ];

        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $response = Http::withHeaders([
            'Content-type' => 'application/json',
            'Authorization' => "Basic $auth",
        ])->post('https://app.sandbox.midtrans.com/snap/v1/transactions', $params);

        $response = json_decode($response->body());

        // Check if the response contains a 'redirect_url'
        if (!isset($response->redirect_url)) {
            // Log the error
            Log::error('No redirect URL found in the response from Midtrans: '.json_encode($response));

            return response()->json(['error' => 'No redirect URL found in the response from Midtrans'], 500);
        }

        // Continue processing if 'redirect_url' exists
        $payment = new Payment([
            'order_id' => $params['transaction_details']['order_id'],
            'status' => 'pending',
            'price' => $request->price,
            'customer_first_name' => $request->customer_first_name,
            'customer_email' => $params['customer_details']['email'],
            'item_name' => $request->item_name,
            'checkout_link' => $response->redirect_url,
        ]);

        // Save payment data to the database
        $payment->save();

        return response()->json($response);
    }

    public function webhook(Request $request)
    {
        $auth = base64_encode(env('MIDTRANS_SERVER_KEY'));

        $response = Http::withHeaders([
            'Content-Type' => 'application.json',
            'Authorization' => "Basic $auth",
        ])->get("https://api.sandbox.midtrans.com/v2/{$request->order_id}/status");

        $response = json_decode($response->body());

        // Cek ke database
        $payment = Payment::where('order_id', $response->order_id)->first();

        if (!$payment) {
            return response()->json('Pembayaran tidak ditemukan dalam database.');
        }

        if ($payment->status === 'settlement' || $payment->status === 'capture') {
            return response()->json('Pembayaran sudah diproses sebelumnya.');
        }

        // Perbarui status berdasarkan respons Midtrans
        $payment->status = $response->transaction_status;
        $payment->save();

        return response()->json('Status pembayaran berhasil diperbarui.');
    }
}
