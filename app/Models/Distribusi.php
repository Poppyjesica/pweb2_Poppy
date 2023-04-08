<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribusi extends Model
{
    protected $table = "penjualan";
    protected $primaryKey = "id";
    protected $fillable =[
        'id',
        'Nama_Konsumen',
        'Alamat',
        'No_telp',
        'Tanggal_Pesanan',
        'Jumlah_pesanan',
        'Harga_Persatuan',
        'Jumlah_Bayar'
    ];
}
