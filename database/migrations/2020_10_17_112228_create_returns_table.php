<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('returns', function (Blueprint $table) {
            $table->id();
            $table->dateTime('tgl_return');
            $table->dateTime('tgl_peminjaman');
            $table->unsignedBigInteger('id_pelanggan');
            $table->unsignedBigInteger('id_sepeda');
            $table->unsignedBigInteger('id_pegawai');
            $table->string('gambar');
            $table->integer('jml_sepeda');
            $table->integer('denda');
            $table->enum('status_pengembalian', ['1', '2']);
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
        Schema::dropIfExists('returns');
    }
}
