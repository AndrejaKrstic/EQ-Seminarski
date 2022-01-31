<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('words', function (Blueprint $table) {
            $table->id('id_reci');
            $table->string('rec');
            $table->string('vrsta_reci');
            $table->string('prevod');
            $table->string('rod')->nullable();
            $table->string('mnozina')->nullable();
            $table->integer('nivo');
            $table->string('tag1')->nullable();
            $table->foreignId('id_jezika');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('words');
    }
}
