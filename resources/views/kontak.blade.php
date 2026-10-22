@extends('layouts.app')

@section('title', 'Kontak')

@push('styles')
<style>
    .container {
        display: flex;
        gap: 10px;
        margin-bottom: 70px;
    }
    .pembukaan2 { margin-bottom: 50px; }
    .row { margin: 30px; }
</style>
@endpush

@section('content')
@include('partials.judul', ['judul' => 'Kontak'])

<div class="row">

    <div class="col-md-6 mb-4">
        <h4>Informasi Kontak</h4>
        <p><b>Alamat:</b> Jl. Raya Percobaan No. 65, Cileunyi, Bandung</p>
        <p><b>Email:</b> info@sejahterabersama.com</p>
        <p><b>Nomor Telepon:</b> 0812-3456-7890</p>

        <h5 class="mt-4">Jam Operasional</h5>
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Hari</th>
                    <th>Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr><td>Senin - Jumat</td><td>08.00 - 16.00</td></tr>
                <tr><td>Sabtu</td><td>08.00 - 12.00</td></tr>
                <tr><td>Minggu</td><td>Tutup</td></tr>
            </tbody>
        </table>
    </div>

    <div class="col-md-6">
        <h4>Kirim Pesan</h4>

        @if (session('sukses'))
            <div class="alert alert-success">{{ session('sukses') }}</div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">Pesan gagal terkirim. Periksa isian lalu coba lagi.</div>
        @endif

        <form method="POST" action="/kontak">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama"
                       placeholder="Masukkan nama" value="{{ old('nama') }}" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       placeholder="nama@email.com" value="{{ old('email') }}" required>
            </div>
            <div class="mb-3">
                <label for="pesan" class="form-label">Pesan</label>
                <textarea class="form-control" id="pesan" name="pesan" rows="4"
                          placeholder="Tulis pesanmu" required>{{ old('pesan') }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

</div>

@include('partials.kembali')
@endsection