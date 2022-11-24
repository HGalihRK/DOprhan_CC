<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->enum("gender",["Male","Female"]);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('user_type',['Pengurus Panti', 'Tutor']);
            $table->enum("is_active",["0","1"])->default("1");
            $table->enum("is_login",["0","1"])->default("0");
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
