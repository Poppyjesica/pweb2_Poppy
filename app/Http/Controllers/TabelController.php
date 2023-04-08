<?php

namespace App\Http\Controllers;

use App\Models\Distribusi;
use Illuminate\Http\Request;
use Illuminate\View;

class TabelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penjualan = Distribusi::all();
        $penjualan = Distribusi::orderBy('id', 'desc')->get();
        return view('table')->with('penjualan', $penjualan);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $penjualan = Distribusi::all();
        // return view('table')
        // return view('form')
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $penjualan=Distribusi::create([
            'id'=>$request->id,
            'Nama_Konsumen'=>$request->Nama_Konsumen,
            'Alamat'=> $request->Alamat,
            'No_telp'=>$request->No_telp,
            'Tanggal_Pesanan'=>$request->Tanggal_Pesanan,
            'Jumlah_pesanan'=>$request->Jumlah_pesanan,
            'Harga_Persatuan'=>$request->Harga_Persatuan,
            'Jumlah_Bayar'=>$request->Jumlah_Bayar
        ]);
        return redirect('table');
    }
    

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $penjualan = Distribusi::find($id);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
