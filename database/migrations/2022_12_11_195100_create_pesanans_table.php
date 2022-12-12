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
        Schema::create('pesanans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama');
            $table->string('noTelp');
            $table->string('email');
            $table->string('alamat');
            $table->date('tanggal');
            $table->integer('jam_mulai');
            $table->integer('jam_selesai');
            $table->foreignId('lapangan_id')->references('id')->on('lapangans')->onDelete('cascade');
            $table->string('bukti_pembayaran')->nullable();
            $table->boolean('status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pesanans');
    }
};
