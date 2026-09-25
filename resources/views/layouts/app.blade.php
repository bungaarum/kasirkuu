
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Dashboard') &middot; {{ config('app.name', 'KasirKu') }}</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f5f7fb; }
        .navbar-brand { font-weight: 700; letter-spacing: .5px; }
        .card { border: 0; box-shadow: 0 2px 10px rgba(0,0,0,.05); }
        .table th { white-space: nowrap; }
        .harga { font-variant-numeric: tabular-nums; }
    
    body {
        background-color: #FFF5F5;
        color: #4A4A4A;
    }

    
    .navbar-brand {
        font-weight: 700;
        letter-spacing: .5px;
        color: #4A4A4A !important;
    }

    
    .navbar {
        background-color: #F7D6D0 !important;
        border-bottom: 1px solid #E2B4BD;
    }

    
    .card {
        border: 1px solid #F7D6D0;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(74, 74, 74, 0.06);
        background-color: #ffffff;
    }

    
    .card-header {
        background-color: #F7D6D0;
        color: #4A4A4A;
        border-bottom: 1px solid #E2B4BD;
    }

    
    .table th {
        white-space: nowrap;
        background-color: #F7D6D0;
        color: #4A4A4A;
    }

    .table td {
        color: #4A4A4A;
        vertical-align: middle;
    }

    
    .table tbody tr:hover {
        background-color: #FFF5F5;
    }

    
    .harga {
        font-variant-numeric: tabular-nums;
        color: #4A4A4A;
        font-weight: 600;
    }

    
    .btn-primary {
        background-color: #b4c6e2 !important;
        border-color: #E2B4BD !important;
        color: #4A4A4A !important;
    }

    .btn-primary:hover {
        background-color: #d5a5af !important;
        border-color: #d5a5af !important;
    }

    
    .btn-outline-primary {
        color: #4A4A4A !important;
        border-color: #E2B4BD !important;
    }

    .btn-outline-primary:hover {
        background-color: #F7D6D0 !important;
        border-color: #E2B4BD !important;
        color: #4A4A4A !important;
    }

    
    .form-control,
    .form-select {
        border: 1px solid #E2B4BD;
        border-radius: 8px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #E2B4BD;
        box-shadow: 0 0 0 0.2rem rgba(226, 180, 189, 0.25);
    }
</style>


</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">&#128179; KasirKu</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home', 'produk.*') ? 'active' : '' }}"
                       href="{{ route('produk.index') }}">Daftar Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaksi.create') ? 'active' : '' }}"
                       href="{{ route('transaksi.create') }}">Transaksi Baru</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('transaksi.index', 'transaksi.show') ? 'active' : '' }}"
                       href="{{ route('transaksi.index') }}">Riwayat Transaksi</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<main class="container pb-5">
    
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    
    @if (session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    @yield('content')
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
@stack('scripts')
</body>
</html>
