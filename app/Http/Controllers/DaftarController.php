<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use Illuminate\Http\Request;

class DaftarController extends Controller
{


    public function daftar(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|min:3',
            'email' => 'required|email|min:3',
            'telepon' => 'required|numeric|min:8',
            'semester' => 'required|in:1,2,3,4,5,6,7,8',
            'berkas' => 'required|mimes:pdf,jpg,zip|max:2048', // Sesuaikan dengan ukuran maksimal yang Anda inginkan
        ]);

        $path = $request->file('berkas')->store('files');

        Beasiswa::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'telepon' => $request->telepon,
            'semester' => $request->semester,
            'berkas' => $path,
        ]);

        return redirect(route('hasil'))->with('success', 'Berhasil mendaftar');
    }
}
