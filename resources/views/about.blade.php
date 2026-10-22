@extends('layouts.app')

@section('title', 'Tentang Kami')

@push('styles')
<style>
    h1, h3, h4 { margin: 10px 0; }
    .visi {
        background-color: grey;
        padding: 5px;
        border-top-left-radius: 50px;
        border-top-right-radius: 50px;
        width: 300px;
        margin: 0 auto;
        font-family: Arial, Helvetica, sans-serif;
    }
    .isivisi {
        background-color: aqua;
        padding: 5px;
        border-radius: 50px;
        width: 700px;
        margin: 0 auto;
    }
    .misi {
        background-color: grey;
        border-radius: 50px;
        padding: 30px;
        margin: 30px;
        font-family: Arial, Helvetica, sans-serif;
    }
</style>
@endpush

@section('content')
@include('partials.judul', ['judul' => 'Tentang Kami'])

<div class="about">
    <h4>PT Sejahtera Bersama adalah perusahaan pengembang perangkat lunak yang berdiri pada tahun 2028. Kami hadir untuk membantu bisnis, institusi pendidikan, dan organisasi di Indonesia bertransformasi secara digital melalui solusi software yang andal, mudah digunakan, dan sesuai kebutuhan nyata di lapangan.
    Kami percaya teknologi yang baik bukan sekadar canggih, tetapi juga membuat pekerjaan sehari-hari menjadi lebih sederhana, cepat, dan transparan. Dengan tim yang berpengalaman dan semangat kolaborasi, kami membangun produk yang tumbuh bersama para penggunanya, sesuai dengan nama kami: sejahtera bersama.</h4>
</div>

<div class="visi">
    <h2 class="text-center">Visi</h2>
</div>

<div class="isivisi">
    <h4 class="text-center">Menjadi perusahaan software terpercaya di Indonesia yang menghadirkan solusi digital inovatif demi kemajuan dan kesejahteraan bersama.</h4>
</div>

<div class="misi">
    <h2 class="text-center">Misi :</h2>
    <ul>
        <li>Menghadirkan solusi berkualitas. Mengembangkan perangkat lunak yang aman, stabil, dan mudah digunakan.</li>
        <li>Mengutamakan kebutuhan pelanggan. Memahami masalah klien secara mendalam dan memberikan solusi yang tepat sasaran.</li>
        <li>Berinovasi secara berkelanjutan. Terus mengikuti perkembangan teknologi untuk menghasilkan produk yang relevan dan kompetitif.</li>
        <li>Membangun tim yang unggul. Menciptakan lingkungan kerja yang kolaboratif, mendukung pertumbuhan, dan menghargai kreativitas.</li>
        <li>Berkontribusi pada masyarakat. Mendorong pemerataan akses teknologi untuk membantu meningkatkan produktivitas dan kesejahteraan masyarakat.</li>
    </ul>
</div>

@include('partials.kembali')
@endsection