@extends('layouts.app')

@section('title', 'Edit Pesanan')

@section('content')
<h2 class="text-xl font-bold mb-4">Edit Pesanan</h2>

@if(session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">{{ session('error') }}</div>
@endif

<form method="POST" action="/pesanan/{{ $pesanan->id }}">
    @csrf
    @method('PUT')

    <div class="mb-4">
        <label>Nama Pemesan</label>
        <input name="nama_pemesan" value="{{ old('nama_pemesan', $pesanan->nama_pemesan) }}" 
            class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
        <label>No. Whatsapp</label>
        <input name="wa_pemesan" value="{{ old('wa_pemesan', $pesanan->wa_pemesan) }}" 
            class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
        <label>Tanggal Booking</label>
        <input type="date" name="tanggal" value="{{ old('tanggal', $pesanan->tanggal) }}" 
            class="w-full p-2 border rounded" required>
    </div>

    <div class="mb-4">
        
        <label>Pilih Jam Pemakaian</label>
        <select name="jadwal_id" class="w-full p-2 border rounded" required>
            @foreach($jadwal as $j)
                <option value="{{ $j->id }}" 
                    {{ $pesanan->jadwal_id == $j->id ? 'selected' : '' }}>
                    Lapangan {{ $j->nomor_lapangan }} - {{ $j->jam_mulai }} s/d {{ $j->jam_selesai }}
                </option>
            @endforeach
        </select>
    </div>

    <button class="bg-yellow-500 text-white px-4 py-2 rounded hover:bg-yellow-600">Update</button>
    <a href="/pesanan" class="ml-2 text-gray-600 hover:underline">Batal</a>
</form>
@endsection