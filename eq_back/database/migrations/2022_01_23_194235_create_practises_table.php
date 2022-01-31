<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practises', function (Blueprint $table) {
            $table->id();
            $table->string('naziv_vezbanja');
            $table->integer('nivo_vezbanja');
            $table->integer('tacno');
            $table->integer('netacno');
            $table->timestamp('datum_vezbanja');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('practises');
    }
}
