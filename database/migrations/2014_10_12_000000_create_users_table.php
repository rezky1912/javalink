<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('old_id')->nullable();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->bigInteger('theme_id')->unsigned()->nullable();
            $table->string('username')->nullable();
            $table->text('bio')->nullable();
            $table->string('avatar')->nullable();
            $table->string('cover')->nullable();
            $table->text('social_links')->nullable(); // Gunakan 'text' untuk data JSON
            $table->enum('social_links_position', ['top', 'bottom'])->default('bottom'); // Gunakan 'enum' untuk nilai tertentu
            $table->rememberToken();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('users');
    }
}
