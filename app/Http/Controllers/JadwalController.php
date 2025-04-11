<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Jadwal;
use App\Models\Pesanan;

class JadwalController extends Controller
{
    //
    //     public function index(Request $request)
    // {
    //     $query = Pesanan::with('jadwal')->orderBy('tanggal');
    //     if ($request->nama_pemesan) {
    //         $query->where('nama_pemesan', 'like', "%{$request->nama_pemesan}%");
    //     }
    //     if ($request->tanggal) {
    //         $query->where('tanggal', $request->tanggal);
    //     }
    //     $pesanan = $query->get();
    //     return view('pesan.index', compact('pesanan'));

    // }

}
