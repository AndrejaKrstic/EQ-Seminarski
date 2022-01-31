<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePractiseStoragesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('practise_storages', function (Blueprint $table) {
            $table->foreignId('id_vezbanja')->references('id')->on('practises')->onDelete('cascade');
            $table->foreignId('korisnik_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('practise_storages');
    }
}
