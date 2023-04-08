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
        Schema::create('penjualan', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Konsumen');
            $table->string('Alamat');
            $table->string('No_telp');
            $table->date('Tanggal_Pesanan');
            $table->string('Jumlah_pesanan');
            $table->string('Harga_Persatuan');
            $table->string('Jumlah_Bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjualan');
    }
};
