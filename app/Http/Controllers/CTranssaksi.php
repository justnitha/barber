<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MTransaksi;
use App\Models\MServices;



class CTranssaksi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trx = MTransaksi::all();
        return view('ui.index', ['trx'=>$trx]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trx = MServices::where('type','Reguler')->get();
        return view('ui.Trx',['trx'=> $trx]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'total' => 'required',
            'layanan_id' => 'required'
        ]);

        $trx = MTransaksi::create([
            'total' => $request -> total,
            'layanan_id' => $request -> layanan_id,
            'bank' => $request -> bank,
            'n_depan' => $request -> n_depan,
            'n_belakang' => $request -> n_belakang,
            'no_telp' => $request -> no_telp,
            'email' => $request -> email,
            'alamat' => $request -> alamat,
            'kode_pos' => $request -> kode_pos,
        ]);
        $trx->save();
        return redirect('/')->with('success', 'Transaksi berhasil disimpan');
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
        //
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
