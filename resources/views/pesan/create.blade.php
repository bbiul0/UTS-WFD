@extends('layouts.app')

@section('title', 'Form Pemesanan Lapangan')

@section('content')

@if(session('error'))
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">{{ session('error') }}</div>
@endif
<!-- bagian form pemesanan -->
<method="POST" action="/pesan" class="space-y-4">
    @csrf

    <input name="nama_pemesan" placeholder="Nama" class="w-full p-2 border rounded" required>
    
    <input name="wa_pemesan" placeholder="No. WA" class="w-full p-2 border rounded" required>
    <input type="date" name="tanggal" class="w-full p-2 border rounded" required>

    <select name="jadwal_id" class="w-full p-2 border rounded" required>
        @foreach($jadwal as $j)
        <option value="{{ $j->id }}">Lapangan {{ $j->nomor_lapangan }} - {{ $j->jam_mulai }}-{{ $j->jam_selesai }}</option>
        @endforeach
    </select>
    <button class="bg-gray-500 text-white p-2 rounded">Simpan</button>
</form>
@endsection

