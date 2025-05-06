@extends('layouts.app')

@section('judul', 'Produk Ikonik Nike')

@section('konten')
<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="fw-bold">Produk Ikonik Nike</h2>
                <p class="lead text-muted">Inovasi yang mengubah dunia olahraga</p>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach($produk as $item)
            <div class="col-md-6 col-lg-4">
                <div class="card produk-card h-100">
                    <img src="{{ $item['gambar'] }}" class="card-img-top" alt="{{ $item['nama'] }}">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3">
                            <i class="bi {{ $item['ikon'] }} fs-3 me-3 nike-text-merah"></i>
                            <div>
                                <h5 class="card-title mb-0">{{ $item['nama'] }}</h5>
                                <small class="text-muted">Diluncurkan {{ $item['tahun'] }}</small>
                            </div>
                        </div>
                        <p class="card-text">{{ $item['deskripsi'] }}</p>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#" class="btn btn-sm nike-bg text-white">Detail Produk</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        
        <div class="row mt-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-body p-4">
                        <h3 class="fw-bold mb-4">Teknologi Unggulan Nike</h3>
                        <div class="row g-4">
                            <div class="col-md-4">
                                <div class="d-flex">
                                    <i class="bi bi-droplet fs-3 nike-text-merah me-3"></i>
                                    <div>
                                        <h5>Air Cushioning</h5>
                                        <p class="small text-muted">Teknologi bantalan udara revolusioner</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex">
                                    <i class="bi bi-lightning-charge fs-3 nike-text-merah me-3"></i>
                                    <div>
                                        <h5>Flyknit</h5>
                                        <p class="small text-muted">Material ringan seperti kaus kaki</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="d-flex">
                                    <i class="bi bi-brightness-high fs-3 nike-text-merah me-3"></i>
                                    <div>
                                        <h5>React Foam</h5>
                                        <p class="small text-muted">Bantalan paling responsif</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection