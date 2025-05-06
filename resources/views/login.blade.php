@extends('layouts.app')

@section('judul', 'Login')

@section('konten')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-lg">
                <div class="card-body p-5">
                    <div class="text-center mb-4">
                        <img src="/images/nike-logo.svg" width="60" alt="Logo Nike" class="mb-3">
                        <h2 class="fw-bold">NIKE INFO</h2>
                        <p class="text-muted">Masuk untuk mengakses informasi</p>
                    </div>
                    
                    <form action="{{ route('login.submit') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn nike-bg w-100 py-2 fw-bold">MASUK</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection