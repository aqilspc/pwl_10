<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
class CariController extends Controller
{


    public function search(Request $request)
    {
        $mahasiswa=Mahasiswa::where('nim',$request->nim)->first();
        return view('mahasiswa.cari',compact('mahasiswa'));
    }
}
