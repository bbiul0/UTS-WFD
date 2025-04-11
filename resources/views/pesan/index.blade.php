@extends('layouts.app')

@section('title', 'List Pemesanan Lapangan')
<!-- daftar pesanan yg sudah diinput -->
@section('content')
<a href="{{ route('pesan.create') }}">+ Buat Pemesanan Baru</a>

<form method="GET" class="mb-4 space-x-2">
    <input type="text" name="nama_pemesan" placeholder="Input Nama Pemesan" class="p-2 border rounded">
    <input type="date" name="tanggal" class="p-2 border rounded">
    <button class="bg-gray-700 text-white p-2 rounded">Search</button>
</form>

<table class="w-full table-auto bg-white shadow rounded">
    <thead>
        <!-- th table header utk judul kolom, td table data untuk isi kolom, tr table row untuk barisnya-->
        <tr><th>Nama Pemesan</th><th>No. Whatsapp</th><th>Tanggal Booking</th><th>Jam Pemakaian</th><th> No. Lapangan</th><th>Tindakan</th></tr>
    </thead>
    <tbody>
        <!-- pesanan sudah urut -->
        @foreach($pesanan as $p) 
        <tr class="border-t">
            <td>{{ $p->nama_pemesan }}</td>
            <td>{{ $p->wa_pemesan }}</td>
            <td>{{ $p->tanggal }}</td>
            <td>{{ $p->jadwal->jam_mulai }}-{{ $p->jadwal->jam_selesai }}</td>
            <td>{{ $p->jadwal->nomor_lapangan }}</td>
            <td>
                <a href="/pesanan/{{ $p->id }}/edit" class="text-blue-500">Edit</a> | 
                <form method="POST" action="/pesanan/{{ $p->id }}" style="display:inline">
                    @csrf @method('DELETE')
                    <button onclick="return confirm('Delete?')" class="text-red-500">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection

