<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MServices;

class CServicess extends Controller
{
    public function index()
    {
        $service = MServices::all();
        return view('chociceAdmin.servicess.index', ['services'=>$service]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
    
        // Lakukan pencarian menggunakan model atau DB query sesuai kebutuhan
        $service = MServices::where('nama_layanan', 'like', '%' . $keyword . '%')
                        ->orWhere('type', 'like', '%' . $keyword . '%')
                        ->get();
                        
        return view('chociceAdmin.servicess.index', ['services' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('chociceAdmin.servicess.create');
    }

    /**
     * Store a newly created resource in storage. required|numeric|digits_between:10,12'
     */
    public function store(Request $request)
    {
        $request->validate([
            'harga' => 'required|numeric|digits_between:1,12',

        ]);
        
        MServices::create(
            [                        
                'nama_layanan' => $request->nama_layanan,
                'type' => $request->type,
                'deskripsi' => $request->deskripsi,
                'harga' => $request->harga,
            ]
        );
        // echo'Success';
        return redirect()->route('services.index')->with('success', 'Data kategori berhasil ditambahkan');
        
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $service = MServices::find($id);
        return view('chociceAdmin.servicess.show', ['services'=>$service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $service = MServices::find($id);

        return view('chociceAdmin.servicess.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'harga' => 'required|numeric|digits_between:1,12',

        ]);
        $service = MServices::find($id);
        
        $service->nama_layanan = $request->nama_layanan;
        $service->type = $request->type;
        $service->deskripsi = $request->deskripsi;
        $service->harga = $request->harga;
        $service->save();
        // echo'Success';
        return redirect()->route('services.index')->with('success', 'Data kategori berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $service = MServices::find($id);

        if (!$service) {
            return false; // Data tidak ditemukan
        }

        $service->delete();

        return redirect()->route('services.index')->with('success', 'Data berhasil dihapus');
    }
}
