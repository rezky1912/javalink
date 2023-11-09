<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinksTable extends Migration
{
    public function up()
    {
        Schema::create('links', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('type');
            $table->text('data'); // Mengubah dari 'json' menjadi 'text'
            $table->integer('sort');
            $table->string('thumbnail', 1000)->nullable();
            $table->string('thumbnail_disk', 255)->nullable();
            $table->tinyInteger('thumbnail_set_from_url')->default(0);
            $table->tinyInteger('is_active')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('links');
    }
}
