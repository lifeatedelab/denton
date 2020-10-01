<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class OpenMindController extends Controller
{
    public function store(Request $request){
        $nama = $request->nama;
        $nim = $request->nim;
        $email = $request->email;
        $angkatan = $request->angkatan;

        $isTrue = DB::table('open_minds')->insert([
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'angkatan' => $angkatan
        ]);

        if($isTrue){
            return redirect('/form/success');
        }

        return redirect('/form');
    }
}
