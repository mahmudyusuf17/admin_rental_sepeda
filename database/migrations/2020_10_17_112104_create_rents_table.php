<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_sewa');
            $table->dateTime('tgl_return');
            $table->integer('durasi_sewa');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_sepeda');
            $table->unsignedBigInteger('id_pegawai');
            $table->string('gambar');
            $table->integer('jml_sepeda');
            $table->string('fasilitas');
            $table->integer('total_harga');
            $table->string('jaminan');
            $table->string('keterangan');
            $table->enum('status_pembayaran', ['1', '2']);
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
        Schema::dropIfExists('rents');
    }
}
