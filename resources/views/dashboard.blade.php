@extends('layouts.app')

@section('judul', 'Beranda')

@section('konten')
<div class="video-background">
    <video autoplay muted loop playsinline>
        <source src="/videos/nike-bg-video.mp4" type="video/mp4">
        <img src="/images/nike-bg-fallback.jpg" alt="Nike Background">
    </video>
    <div class="video-overlay"></div>
    <div class="video-content">
        <div class="container text-white text-center">
            <h1 class="display-4 fw-bold mb-4">Selamat datang, {{ $username }}!</h1>
            <p class="lead mb-5">Temukan sejarah, inovasi, dan produk ikonik dari Nike</p>
            <a href="{{ route('tentang') }}" class="btn btn-light btn-lg px-4 me-2">Pelajari Sejarah</a>
            <a href="{{ route('produk') }}" class="btn btn-outline-light btn-lg px-4">Lihat Produk</a>
        </div>
    </div>
</div>
</section>

<section class="py-5 bg-white">
    <div class="container">
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-clock-history text-primary fs-1 mb-3"></i>
                        <h3>Sejarah</h3>
                        <p>Pelajari perjalanan Nike dari masa ke masa</p>
                        <a href="{{ route('tentang') }}" class="btn btn-outline-primary">Jelajahi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-lightbulb text-danger fs-1 mb-3"></i>
                        <h3>Inovasi</h3>
                        <p>Temukan teknologi terbaru dari Nike</p>
                        <a href="{{ route('produk') }}" class="btn btn-outline-danger">Temukan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body text-center p-4">
                        <i class="bi bi-star text-warning fs-1 mb-3"></i>
                        <h3>Produk</h3>
                        <p>Lihat koleksi produk ikonik Nike</p>
                        <a href="{{ route('produk') }}" class="btn btn-outline-warning">Lihat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection