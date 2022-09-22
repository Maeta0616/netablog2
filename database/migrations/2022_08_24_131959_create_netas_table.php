<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('netas', function (Blueprint $table) {
            $table->id();
            $table->string('name',20);
            $table->foreignId('combination_id')->constrained();
            $table->foreignId('genre_id')->constrained();
            $table->string('overview');
            $table->integer('votes_avg')->nullable();
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
        Schema::dropIfExists('netas');
    }
}
