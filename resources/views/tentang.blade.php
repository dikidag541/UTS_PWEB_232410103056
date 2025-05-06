@extends('layouts.app')

@section('judul', 'Sejarah Nike')

@section('konten')
<section class="py-5 bg-white">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Sejarah Perjalanan Nike</h2>
                <p class="lead text-muted">Dari Blue Ribbon Sports hingga menjadi raksasa olahraga dunia</p>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="timeline">
                    @foreach($sejarah as $tahun => $peristiwa)
                    <div class="timeline-item mb-5">
                        <h4 class="fw-bold">{{ $tahun }}</h4>
                        <p>{{ $peristiwa }}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        
        <div class="row mt-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <img src="/images/nike-history.jpg" class="img-fluid rounded shadow" alt="Sejarah Nike">
            </div>
            <div class="col-md-6">
                <h3 class="fw-bold mb-4">Filosofi Nike</h3>
                <p>Nike didirikan dengan semangat untuk membawa inovasi bagi setiap atlet di dunia. Kutipan terkenal dari pendiri Nike, Bill Bowerman: "Jika kamu memiliki tubuh, kamu adalah atlet" menjadi dasar filosofi perusahaan.</p>
                <p>Slogan "Just Do It" yang diluncurkan pada 1988 menjadi salah satu kampanye pemasaran paling sukses sepanjang masa, mencerminkan semangat pantang menyerah yang ingin ditularkan Nike kepada seluruh pelanggannya.</p>
                <div class="alert alert-primary mt-4">
                    <i class="bi bi-quote fs-3"></i>
                    <p class="mb-0">Just Do It - Nike</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection