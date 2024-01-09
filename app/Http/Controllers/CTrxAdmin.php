<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MTransaksi;
use App\Models\MServices;
use Carbon\Carbon;

class CTrxAdmin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trxx = MTransaksi::all();
        $waktu = Carbon::now();
        $formattedTime = $waktu->format('d/m/Y');
        
        // Kirim data transaksi dan waktu ke view
        return view('chociceAdmin.trx.index', ['trxx' => $trxx, 'formattedTime' => $formattedTime]);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
        $waktu = Carbon::now();
        $formattedTime = $waktu->format('d/m/Y');
    
        // Lakukan pencarian menggunakan model atau DB query sesuai kebutuhan
        $trxx = MTransaksi::where('transaksi_id', 'like', '%' . $keyword . '%')
                        ->orWhere('n_depan', 'like', '%' . $keyword . '%')
                        ->orWhereHas('services', function ($query) use ($keyword) {
                            $query->where('nama_layanan', 'like', '%' . $keyword . '%');
                        })
                        ->orWhere('bank', 'like', '%' . $keyword . '%')
                        ->get();
                        
        return view('chociceAdmin.trx.index', ['trxx' => $trxx,'formattedTime' => $formattedTime]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $trxx = MServices::where('type','Reguler')->get();
        return view('chociceAdmin.trx.create',['trxx'=> $trxx]);

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

        $trxx = MTransaksi::create([
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
        $trxx->save();
        return redirect()->route('booking.index')->with('success', 'Data kategori berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trxx = MTransaksi::find($id);
        return view('chociceAdmin.trx.show', ['trxx'=>$trxx]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {

        $trxx = MTransaksi::find($id);
        $layananList = MServices::where('type','Reguler')->get();

        return view('chociceAdmin.trx.edit',compact('trxx','layananList'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'total' => 'required',
            'layanan_id' => 'required'
        ]);
    
        $trxx = MTransaksi::find($id);
        
        $trxx->total = $request->total;
        $trxx->layanan_id = $request->layanan_id;
        $trxx->save();
            // echo'Success';
        return redirect()->route('booking.index')->with('success', 'Data kategori berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trxx = MTransaksi::find($id);
        $trxx->delete();

        return redirect()->route('booking.index')->with('success', 'Data berhasil dihapus');
    }
}
