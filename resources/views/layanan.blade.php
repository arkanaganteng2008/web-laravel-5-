@extends('layouts.app')

@section('title', 'Layanan')

@push('styles')
<style>
    .container {
        display: flex;
        gap: 10px;
        margin-bottom: 70px;
    }
    .pembukaan2 { margin-bottom: 50px; }
</style>
@endpush

@section('content')
@include('partials.judul', ['judul' => 'Layanan kami'])

<div class="container my-5">
    <div class="row">
        @foreach ($layanan as $item)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="{{ asset($item->gambar) }}"
                         class="card-img-top"
                         alt="{{ $item->nama_layanan }}"
                         style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->nama_layanan }}</h5>
                        <p class="card-text">{{ $item->deskripsi }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@include('partials.kembali')
@endsection