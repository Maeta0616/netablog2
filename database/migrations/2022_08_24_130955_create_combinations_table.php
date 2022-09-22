<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCombinationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('combinations', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->string('member1',10)->nullable();
            $table->string('member2',10)->nullable();
            $table->string('member3',10)->nullable();
            $table->string('member4',10)->nullable();
            $table->string('feature')->nullable();
            $table->foreignId('office_id')->constrained();
            $table->string('anker')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('combinations');
    }
}
