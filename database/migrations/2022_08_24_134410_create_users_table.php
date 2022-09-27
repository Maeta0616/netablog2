<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
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
            $table->string('email');
            $table->string('password')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('age')->nullable();
            $table->string('sex')->nullable();
            $table->string('neta')->nullable();
            $table->string('twitter')->nullable();
            $table->timestamps();
            $table->softDeletes();
            $table->string("provider_id")->nullable();
            $table->string("provider_token")->nullable();
            $table->string("provider_refresh_token")->nullable();
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
}

