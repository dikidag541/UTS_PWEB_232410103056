<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike Info - @yield('judul')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css">
    
    <style>
        :root {
            --nike-hitam: #111;
            --nike-putih: #fff;
            --nike-abu: #f8f9fa;
            --nike-merah: #e4002b;
        }
        
        body {
            font-family: 'Helvetica Neue', Arial, sans-serif;
            background-color: var(--nike-abu);
        }
        
        .nike-bg {
            background-color: var(--nike-hitam);
            color: var(--nike-putih);
        }
        
        .nike-bg-merah {
            background-color: var(--nike-merah);
            color: var(--nike-putih);
        }
        
        .nike-text-merah {
            color: var(--nike-merah);
        }
        
        .hero-section {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('/images/nike-bg.jpg');
            background-size: cover;
            background-position: center;
            min-height: 300px;
        }
        
        .timeline {
            position: relative;
            padding-left: 50px;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 15px;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--nike-merah);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 30px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: -38px;
            top: 5px;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            background: var(--nike-merah);
            border: 3px solid var(--nike-putih);
        }
        
        .produk-card {
            transition: transform 0.3s, box-shadow 0.3s;
            border: none;
            border-radius: 10px;
            overflow: hidden;
        }
        
        .produk-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }
        .video-background {
            position: relative;
            width: 100%;
            height: 100vh;
            overflow: hidden;
        }
        
        .video-background video {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            object-fit: cover;
        }
        
        .video-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        
        .video-content {
            position: relative;
            z-index: 1;
            height: 100vh;
            display: flex;
            align-items: center;
        }
    </style>
    
    @stack('styles')
</head>
<body>
    @include('components.navbar')
    
    <main>
        @yield('konten')
    </main>
    
    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>