<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadwal;
use App\Models\Pesanan;


class PesananController extends Controller
{
    public function index(Request $request)
    {
        $query = Pesanan::with('jadwal')->orderBy('tanggal');
        if ($request->nama_pemesan) {
            $query->where('nama_pemesan', 'like', "%{$request->nama_pemesan}%");
        }
        if ($request->tanggal) {
            $query->where('tanggal', $request->tanggal);
        }
        $pesanan = $query->get();
        return view('pesan.index', compact('pesanan'));

    }

    public function create(){
        $jadwal = Jadwal::all();
        return view('pesan.create', compact('jadwal'));
    }

    public function store(Request $request){
        $request->validate([
            'nama_pemesan' => 'required',
            'wa_pemesan' => 'required|size:13',
            'tanggal' => 'required|date',
            'jadwal_id' => 'required|exists:jadwal,id',
        ]);

        // Cek bentrok
        $conflict = Pesanan::where('jadwal_id', $request->jadwal_id)
            ->where('tanggal', $request->tanggal)->exists();

        if ($conflict) {
            return back()->with('error', 'Jadwal sudah dipesan pada tanggal tersebut.');
        }

        $pesanan = new Pesanan($request->all());
        $pesanan->save();

        return redirect('/pesanan')->with('success', 'Pemesanan berhasil!');
    }

    public function edit($id){
        $pesanan = Pesanan::findOrFail($id);
        $jadwal = Jadwal::all();
        return view('pesan.edit', compact('pesanan', 'jadwal'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_pemesan' => 'required',
            'wa_pemesan' => 'required|size:13',
            'tanggal' => 'required|date',
            'jadwal_id' => 'required|exists:jadwal,id',
        ]);

        $conflict = Pesanan::where('jadwal_id', $request->jadwal_id)
            ->where('tanggal', $request->tanggal)
            ->where('id', '!=', $id)
            ->exists();

        if ($conflict) {
            return back()->with('error', 'Jadwal sudah dipesan!');
        }

        Pesanan::findOrFail($id)->update($request->all());
        return redirect('/pesanan')->with('success', 'Pesanan diperbarui');
        }

    }


