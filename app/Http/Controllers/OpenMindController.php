<?php

namespace App\Http\Controllers;

use App\Models\OpenMind;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

class OpenMindController extends Controller
{
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'nim' => 'required|numeric|unique:open_minds,nim',
            'email' => 'required|string|unique:open_minds,email',
            'angkatan' => 'required|string'
        ]);

        $nama = $request->nama;
        $nim = $request->nim;
        $email = $request->email;
        $angkatan = $request->angkatan;

        $isTrue = OpenMind::insert([
            'nama' => $nama,
            'nim' => $nim,
            'email' => $email,
            'angkatan' => $angkatan,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now()
        ]);


        if($isTrue){
            return view('open_minds.success');
        }

        return redirect()->back();
    }
}
