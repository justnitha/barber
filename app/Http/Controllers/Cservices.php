<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Cservices extends Controller
{
    public function services() {
        //load model
        $serv= DB::table('layanan') ->get();
        return view('ui.Services',["layanan" => $serv]);
    }
}
