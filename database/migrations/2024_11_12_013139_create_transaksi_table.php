<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->date('tanggal');
            $table->string('jumlah');
            $table->unsignedBigInteger('id_jenis_pembayaran');
            $table->string('status')->nullable();
            $table->foreign('id_jenis_pembayaran')->references('id_jenis_pembayaran')->on('jenis_pembayaran');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
