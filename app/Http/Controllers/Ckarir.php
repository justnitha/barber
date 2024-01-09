<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MKarir;

class Ckarir extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $karir = MKarir::all();
        return view('chociceAdmin.karir.index', ['karirs'=>$karir]);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('keyword');
    
        // Lakukan pencarian menggunakan model atau DB query sesuai kebutuhan
        $karir = MKarir::where('name', 'like', '%' . $keyword . '%')
                        ->orWhere('id', 'like', '%' . $keyword . '%')
                        ->orWhere('app_for', 'like', '%' . $keyword . '%')
                        ->get();
                        
        return view('chociceAdmin.karir.index', ['karirs' => $karir]);
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ui.Careers');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:doc,docx,pdf,jpg,jpeg,png|max:3000',
            'phone_number' => 'required|string|min:10|max:12',
        ]);
    
        if ($request->hasFile('file')) {
            $filename = round(microtime(true) * 1000) . '-' . str_replace(' ', '-', $request->file('file')->getClientOriginalName());
            $request->file('file')->move(public_path('imageKarir'), $filename);
    
            MKarir::create([
                'file' => $filename,
                'name' => $request->name,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'app_for' => $request->app_for,
                'about' => $request->about,
            ]);
            // echo'Success';
            return redirect()->route('karir.create')->with('success', 'Data kategori berhasil ditambahkan');
        }else{
            return redirect()->route('karir.create')->with('error', 'Gagal mengunggah file');

        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $karir = MKarir::find($id);
        return view('chociceAdmin.karir.show', ['karirs'=>$karir]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $karir = MKarir::find($id);

        return view('chociceAdmin.karir.edit',compact('karir'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        // echo'Success';
        $request->validate([
            'phone_number' => 'required|string|min:10|max:12',
            'phone_number' => 'required',
        ]);
    
        $service = MKarir::find($id);
        
        $service->name = $request->name;
        $service->email = $request->email;
        $service->phone_number = $request->phone_number;
        $service->about = $request->about;
        $service->save();
            // echo'Success';
        return redirect()->route('karir.index')->with('success', 'Data kategori berhasil ditambahkan');

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $karir = MKarir::find($id);
        $karir->delete();

        return redirect()->route('karir.index')->with('success', 'Data berhasil dihapus');
    }
}
