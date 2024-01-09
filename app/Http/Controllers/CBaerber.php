<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MBarber;


class CBaerber extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barber = MBarber::all();
        return view('chociceAdmin.barber.index', ['barbers'=>$barber]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
    
        // Lakukan pencarian menggunakan model atau DB query sesuai kebutuhan
        $barber = MBarber::where('nama', 'like', '%' . $keyword . '%')
                        ->orWhere('alamat', 'like', '%' . $keyword . '%')
                        ->orWhere('email', 'like', '%' . $keyword . '%')
                        ->orWhere('barber_id', 'like', '%' . $keyword . '%')
                        ->get();
    
        return view('chociceAdmin.barber.index', ['barbers' => $barber]);
    }
    public function create()
    {
        return view('chociceAdmin.barber.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000',
            'nomor_telepon' => 'required|string|min:10|max:12',
        ]);
        if ($request->hasfile('filename')) {            
            $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('imageB'), $filename);
             MBarber::create(
                    [                        
                        'img_file' =>$filename,
                        'nama' => $request->nama,
                        'nomor_telepon' => $request->nomor_telepon,
                        'email' => $request->email,
                        'alamat' => $request->alamat,
                        'job_desk' => $request->job_desk,
                    ]
                );
            // echo'Success';
            return redirect()->route('barber.index')->with('success', 'Data kategori berhasil ditambahkan');
        }else{
            echo'Gagal';
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $barber = MBarber::find($id);
        return view('chociceAdmin.barber.show', ['barbers'=>$barber]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $barber = MBarber::find($id);

        return view('chociceAdmin.barber.edit', compact('barber'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'filename' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000',
            'nomor_telepon' => 'required|string|min:10|max:12',
        ], 
        [
            'nomor_telepon.max' => 'Nomor telepon harus memiliki panjang maksimal 12 karakter.',
        ]);
    
        $barber = MBarber::find($id);
    
        if ($request->hasfile('filename')) {            
            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('filename')->getClientOriginalName());
            $request->file('filename')->move(public_path('imageB'), $filename);
    
            // Hapus gambar lama jika ada
            if (file_exists(public_path('imageB/' . $barber->img_file))) {
                unlink(public_path('imageB/' . $barber->img_file));
            }
    
            $barber->img_file = $filename;
        }
    
        $barber->nama = $request->nama;
        $barber->nomor_telepon = $request->nomor_telepon;
        $barber->email = $request->email;
        $barber->alamat = $request->alamat;
        $barber->save();
    
        return redirect()->route('barber.index')->with('success', 'Data kategori berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $model = new MBarber();
        $result = $model->deleteBarber($id);

        if ($result) {
            return redirect()->route('barber.index')->with('success', 'Data berhasil dihapus');
        } else {
            return redirect()->route('barber.index')->with('error', 'Data tidak ditemukan');
        }
    }
}
