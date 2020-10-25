<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('jenis_kelamin', ['1', '2']);
            $table->string('alamat');
            $table->string('email');
            $table->string('no_hp');
            $table->string('merk_sepeda');
            $table->string('jenis_sepeda');
            $table->integer('jml_sepeda');
            $table->dateTime('tgl_sewa');
            $table->dateTime('tgl_return');
            $table->string('jaminan');
            $table->string('bukti_jaminan');
            $table->string('keterangan');
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
        Schema::dropIfExists('customers');
    }
}
