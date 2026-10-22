<?php

namespace App\Http\Controllers;

use App\Models\Pesan;
use Illuminate\Http\Request;

class KontakController extends Controller
{
    public function index()
    {
        return view('kontak');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama'  => 'required|max:100',
            'email' => 'required|email',
            'pesan' => 'required',
        ]);

        Pesan::create([
            'nama'      => $data['nama'],
            'email'     => $data['email'],
            'isi_pesan' => $data['pesan'],
        ]);

        return back()->with('sukses', 'Pesan berhasil terkirim. Terima kasih!');
    }
}
