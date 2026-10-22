@extends('layouts.app')

@section('title', 'Beranda')

@push('styles')
<style>
    .header {
        background-color: aqua;
        border-bottom-right-radius: 40px;
        border-bottom-left-radius: 40px;
        padding: 20px;
        display: flex;
        align-items: center;
        gap: 25px;
    }
    .company-profile {
        width: 120px;
        height: 120px;
        border-radius: 40%;
        object-fit: cover;
        flex-shrink: 0;
    }
    .header h1, .header h3 {
        margin: 0;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
@endpush

@section('content')
<div class="header">
    <img src="{{ asset('css/matikanefukukitaru_icon - copy.png') }}" class="company-profile" alt="Foto Profil">
    <div class="teks">
        <h1>PT. Sejahtera Bersama</h1>
        <h6>"Teknologi untuk Sejahtera Bersama."</h6>
    </div>
</div>

<div class="container text-center">
    <div class="row row-cols-3">
        <a href="/about" class="btn btn-outline-primary">About</a>
        <a href="/kontak" class="btn btn-outline-primary">Kontak</a>
        <a href="/layanan" class="btn btn-outline-primary">Layanan</a>
    </div>
</div>

<div class="about">
    <h3>Sekilas Tentang Kami :</h3>
    <br>
    <h6><p>"PT Sejahtera Bersama adalah perusahaan pengembang perangkat lunak yang berdiri pada tahun 2028. Kami hadir untuk membantu bisnis, institusi pendidikan, dan organisasi di Indonesia bertransformasi secara digital melalui solusi software yang andal, mudah digunakan, dan sesuai kebutuhan nyata di lapangan.
    Kami percaya teknologi yang baik bukan sekadar canggih, tetapi juga membuat pekerjaan sehari-hari menjadi lebih sederhana, cepat, dan transparan. Dengan tim yang berpengalaman dan semangat kolaborasi, kami membangun produk yang tumbuh bersama para penggunanya, sesuai dengan nama kami: sejahtera bersama."</p></h6>
</div>
@endsection