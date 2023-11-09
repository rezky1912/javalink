@extends('layouts.home')

@section('page-title')
    {{ __("Harga | JavaLink") }}
@endsection

@section('content')
<div class="div">
  <div class="div-2">
    <span style="color: rgba(25, 26, 21, 1)">Pilih</span>
    <span style="color: rgba(255, 255, 255, 1)">
      Paket
      <br />
    </span>
    <span style="color: rgba(25, 26, 21, 1)">Yang</span>
    <span style="color: rgba(255, 255, 255, 1)">Tepat</span>
    <span style="color: rgba(25, 26, 21, 1)">Untuk</span>
    <span style="color: rgba(255, 255, 255, 1)">Anda</span>
  </div>
  <div class="div-3">
    Pilih paket yang sesuai kebutuhan Anda, silahkan hubungi kami
  </div>
  <div class="div-4">
    <div class="div-5">Biaya Bulanan</div>
    <div class="div-6">Biaya Tahunan</div>
  </div>
  <div class="div-7">
    <div class="div-8">
      <div class="column">
        <div class="div-9">
          <div class="div-10">Gratis</div>
          <div class="div-11">Silakan coba dan uji kualitas JavaLink</div>
          <div class="div-12">0</div>
          <div class="div-13">
            <div class="div-14">
              <div class="div-15">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/beed51b8-4d0b-42f1-bcb9-7632b4316696?"
                  class="img"
                />
                <div class="div-16">2 Pengguna</div>
              </div>
              <div class="div-17">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/001d702f-6bc0-4bf3-899c-a23e98f3e3ae?"
                  class="img-2"
                />
                <div class="div-18">2 File</div>
              </div>
              <div class="div-19">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2790d683-80f2-42ab-8070-6e3f19802e10?"
                  class="img-3"
                />
                <div class="div-20">Share & Komentar Publik</div>
              </div>
              <div class="div-21">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/fabe4923-e4a8-434d-acb5-5b861e32c9d0?"
                  class="img"
                />
                <div class="div-22">Dukungan Obrolan</div>
              </div>
              <div class="div-23">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/58264a7a-da1b-4499-b2f1-56863acc7cf4?"
                  class="img"
                />
                <div class="div-24">Aplikasi Pendapatan Baru</div>
              </div>
              <div class="div-25"><div class="div-26">Daftar Gratis</div></div>
            </div>
          </div>
        </div>
      </div>
      <div class="column-2">
        <div class="div-27">
          <div class="div-28">PRO</div>
          <div class="div-29">Eksperimen kualitas yang tak terbatas</div>
          <div class="div-12">Rp. 10000</div>
          <div class="div-13">
            <div class="div-14">
              <div class="div-15">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/beed51b8-4d0b-42f1-bcb9-7632b4316696?"
                  class="img"
                />
                <div class="div-16">2 Pengguna</div>
              </div>
              <div class="div-17">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/001d702f-6bc0-4bf3-899c-a23e98f3e3ae?"
                  class="img-2"
                />
                <div class="div-18">2 File</div>
              </div>
              <div class="div-19">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/2790d683-80f2-42ab-8070-6e3f19802e10?"
                  class="img-3"
                />
                <div class="div-20">Share & Komentar Publik</div>
              </div>
              <div class="div-21">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/fabe4923-e4a8-434d-acb5-5b861e32c9d0?"
                  class="img"
                />
                <div class="div-22">Dukungan Obrolan</div>
              </div>
              <div class="div-23">
                <img
                  loading="lazy"
                  src="https://cdn.builder.io/api/v1/image/assets/TEMP/58264a7a-da1b-4499-b2f1-56863acc7cf4?"
                  class="img"
                />
                <div class="div-24">Aplikasi Pendapatan Baru</div>
              </div>
              <div class="div-25"><div class="div-26">Daftar Gratis</div></div>
            </div>
          </div>
        </div>
      </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
  .div {
    background-color: #388568;
    display: flex;
    flex-direction: column;
    padding: 0 20px;
  }
  .div-2 {
    color: #fff;
    text-align: center;
    align-self: center;
    margin-top: 69px;
    max-width: 625px;
    font: 700 50px/73px Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-2 {
      max-width: 100%;
      font-size: 40px;
      margin-top: 40px;
    }
  }
  .div-3 {
    color: #fff;
    text-align: center;
    align-self: center;
    text-wrap: nowrap;
    margin: 51px 0 0 -19px;
    font: 400 20px Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-3 {
      max-width: 100%;
      margin-top: 40px;
      text-wrap: initial;
    }
  }
  .div-4 {
    border-radius: 10px;
    box-shadow: 0px 4px 9px 0px rgba(0, 0, 0, 0.05);
    background-color: #fff;
    align-self: center;
    display: flex;
    margin-top: 53px;
    width: 340px;
    max-width: 100%;
    align-items: flex-start;
    justify-content: space-between;
    gap: 20px;
    padding: 7px 7px 7px 26px;
  }
  @media (max-width: 991px) {
    .div-4 {
      margin-top: 40px;
    }
  }
  .div-5 {
    color: #191a15;
    margin: auto 0;
    font: 500 18px/166.667% Inter, sans-serif;
  }
  .div-6 {
    color: #fff;
    align-self: stretch;
    text-wrap: nowrap;
    border-radius: 10px;
    background-color: #54bd95;
    width: 160px;
    max-width: 100%;
    padding: 19px 16px 19px 17px;
    font: 500 18px/166.667% Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-6 {
      text-wrap: initial;
    }
  }
  .div-7 {
    align-self: center;
    width: 777px;
    max-width: 100%;
    margin: 55px 0 74px;
  }
  @media (max-width: 991px) {
    .div-7 {
      margin: 40px 0;
    }
  }
  .div-8 {
    gap: 20px;
    display: flex;
  }
  @media (max-width: 991px) {
    .div-8 {
      flex-direction: column;
      align-items: stretch;
      gap: 0px;
    }
  }
  .column {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 50%;
    margin-left: 0px;
  }
  @media (max-width: 991px) {
    .column {
      width: 100%;
    }
  }
  .div-9 {
    border-radius: 20px;
    box-shadow: 0px 4px 9px 0px rgba(0, 0, 0, 0.05);
    background-color: #fff;
    display: flex;
    width: 100%;
    flex-direction: column;
    flex: 1;
    margin: auto;
    padding: 46px 20px 25px;
  }
  @media (max-width: 991px) {
    .div-9 {
      margin-top: 40px;
    }
  }
  .div-10 {
    color: #191a15;
    text-align: center;
    align-self: center;
    text-wrap: nowrap;
    font: 600 30px Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-10 {
      text-wrap: initial;
    }
  }
  .div-11 {
    color: #a6a6a6;
    text-align: center;
    margin-top: 14px;
    font: 500 18px/150% Inter, sans-serif;
  }
  .div-12 {
    color: #191a15;
    align-self: center;
    margin-top: 62px;
    text-wrap: nowrap;
    font: 600 50px/60% Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-12 {
      font-size: 40px;
      margin-top: 40px;
      text-wrap: initial;
    }
  }
  .div-13 {
    border-radius: 10px;
    background-color: #f9fafb;
    align-self: stretch;
    display: flex;
    margin-top: 26px;
    width: 100%;
    flex-direction: column;
    padding: 27px 20px;
  }
  .div-14 {
    align-self: center;
    display: flex;
    width: 260px;
    max-width: 100%;
    flex-direction: column;
  }
  .div-15 {
    align-self: start;
    display: flex;
    width: 142px;
    max-width: 100%;
    align-items: flex-start;
    gap: 10px;
  }
  .img {
    aspect-ratio: 1;
    object-fit: cover;
    object-position: center;
    width: 26px;
    fill: #54bd95;
    overflow: hidden;
    align-self: start;
    max-width: 100%;
  }
  .div-16 {
    color: #191a15;
    align-self: start;
    text-wrap: nowrap;
    font: 500 18px/166.667% Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-16 {
      text-wrap: initial;
    }
  }
  .div-17 {
    align-self: start;
    display: flex;
    margin-top: 26px;
    width: 80px;
    max-width: 100%;
    align-items: flex-start;
    gap: 10px;
  }
  .img-2 {
    aspect-ratio: 1;
    object-fit: cover;
    object-position: center;
    width: 100%;
    fill: #54bd95;
    overflow: hidden;
    flex: 1;
  }
  .div-18 {
    color: #191a15;
    align-self: center;
    margin: auto 0;
    font: 500 18px/166.667% Inter, sans-serif;
  }
  .div-19 {
    align-self: start;
    display: flex;
    margin-top: 26px;
    width: 100%;
    align-items: flex-start;
    gap: 10px;
  }
  .img-3 {
    aspect-ratio: 1;
    object-fit: cover;
    object-position: center;
    width: 100%;
    fill: #54bd95;
    overflow: hidden;
    flex: 1;
  }
  .div-20 {
    color: #191a15;
    align-self: center;
    width: 100%;
    margin: auto 0;
    font: 500 18px/166.667% Inter, sans-serif;
  }
  .div-21 {
    align-self: start;
    display: flex;
    margin-top: 26px;
    width: 203px;
    max-width: 100%;
    align-items: flex-start;
    gap: 10px;
  }
  .div-22 {
    color: #191a15;
    align-self: start;
    text-wrap: nowrap;
    font: 500 18px/166.667% Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-22 {
      text-wrap: initial;
    }
  }
  .div-23 {
    align-self: start;
    display: flex;
    margin-top: 26px;
    width: 100%;
    align-items: flex-start;
    gap: 10px;
  }
  .div-24 {
    color: #191a15;
    align-self: start;
    text-wrap: nowrap;
    font: 500 18px/166.667% Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-24 {
      text-wrap: initial;
    }
  }
  .div-25 {
    border-radius: 20px;
    box-shadow: 0px 4px 9px 0px rgba(0, 0, 0, 0.05);
    background-color: #fff;
    align-self: start;
    display: flex;
    margin-top: 17px;
    width: 100%;
    flex-grow: 1;
    flex-direction: column;
    padding: 25px 20px;
  }
  .div-26 {
    color: #54bd95;
    align-self: center;
    margin-left: -10px;
    text-wrap: nowrap;
    font: 600 18px/166.667% Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-26 {
      text-wrap: initial;
    }
  }
  .column-2 {
    display: flex;
    flex-direction: column;
    line-height: normal;
    width: 50%;
    margin-left: 20px;
  }
  @media (max-width: 991px) {
    .column-2 {
      width: 100%;
    }
  }
  .div-27 {
    border-radius: 20px;
    background-color: #54bd95;
    display: flex;
    width: 100%;
    flex-grow: 1;
    padding-top: 47px;
    flex-direction: column;
    flex: 1;
    margin: 0 auto;
  }
  @media (max-width: 991px) {
    .div-27 {
      margin-top: 29px;
    }
  }
  .div-28 {
    color: #fff;
    align-self: center;
    text-wrap: nowrap;
    font: 600 30px Inter, sans-serif;
  }
  @media (max-width: 991px) {
    .div-28 {
      text-wrap: initial;
    }
  }
  .div-29 {
    color: #fff;
    text-align: center;
    margin-top: 14px;
    font: 500 18px/150% Inter, sans-serif;
  }
  .img-4 {
    aspect-ratio: 0.7;
    object-fit: cover;
    object-position: center;
    width: 100%;
    overflow: hidden;
    border-radius: 50%;
    align-self: stretch;
    margin-top: 9px;
    flex-grow: 1;
  }
</style>

@endsection
