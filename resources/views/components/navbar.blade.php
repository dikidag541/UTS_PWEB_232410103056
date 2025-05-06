<nav class="navbar navbar-expand-lg nike-bg py-3 shadow-sm">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('dashboard') }}">
            <img src="/images/nike-logo.svg" height="30" alt="Logo Nike" class="me-2">
            <span class="text-white fw-bold">NIKE INFO</span>
        </a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon text-white"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active fw-bold' : '' }}" 
                    href="{{ route('dashboard') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('tentang') ? 'active fw-bold' : '' }}" 
                    href="{{ route('tentang') }}">Sejarah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('produk') ? 'active fw-bold' : '' }}" 
                    href="{{ route('produk') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white {{ request()->routeIs('profil') ? 'active fw-bold' : '' }}" 
                    href="{{ route('profil') }}">Profil</a>
                </li>
            </ul>
        </div>
    </div>
</nav>