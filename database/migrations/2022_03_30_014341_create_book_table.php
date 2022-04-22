<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_kamar')->default(0)->references('id')->on('kamar');
            $table->date('check_in');
            $table->date('check_out');
            $table->string('nama_pemesan');
            $table->string('email')->unique();
            $table->string('nomor_hp');
            $table->string('nama_tamu');
            $table->string('tipe_kamar');
            $table->integer('jumlah_kamar');
            $table->bigInteger('harga_kamar');
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
        Schema::dropIfExists('book');
    }
};