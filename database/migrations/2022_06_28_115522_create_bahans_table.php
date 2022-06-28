<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBahansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bahan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_bahan');
            $table->integer('stok');
            $table->string('satuan');
            $table->integer('harga');
            $table->date('masaberlaku');
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
        Schema::dropIfExists('bahan');
    }
}
