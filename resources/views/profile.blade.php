@extends('layouts.app')

@section('judul', 'Profil Pengguna')

@section('konten')
<section class="py-5 bg-white">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-4 p-md-5">
                        <div class="text-center mb-4">
                            <img src="/images/nike-logo.svg" width="60" alt="Logo Nike" class="mb-3">
                            <h3 class="fw-bold">Profil Pengguna</h3>
                        </div>
                        
                        <div class="text-center mb-5">
                            <div class="mb-3">
                                <i class="bi bi-person-circle fs-1 nike-text-merah"></i>
                            </div>
                            <h4>Selamat datang, {{ $username }}!</h4>
                            <p class="text-muted">Anda login sebagai pengunjung Nike Info</p>
                        </div>
                        
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title">Informasi Akun</h5>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Username:</span>
                                        <span class="fw-bold">{{ $username }}</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Email:</span>
                                        <span class="fw-bold">{{ $username }}@example.com</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between">
                                        <span>Bergabung:</span>
                                        <span class="fw-bold">Mei 2024</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2">
                            <button class="btn nike-bg text-white">Edit Profil</button>
                            <button class="btn btn-outline-secondary">Keluar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection