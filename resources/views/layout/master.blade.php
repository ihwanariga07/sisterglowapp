<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    @yield('css')
    <title>@yield('title', 'Costumer Service App')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Beranda</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link @yield('MenuCostumer')" href="{{ route('costumers.index') }}">Costumer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('MenuTransaksi')" href="#">Transaksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @yield('MenuLayanan')" href="#">Layanan</a>
                    </li>
                </ul>
                <form class="d-flex" role="search" method="GET" action="#">
                    <input class="form-control me-2" type="search" placeholder="Cari Costumer..." name="q">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        @yield('konten')
    </div>

    <footer class="fixed-bottom bg-dark text-white py-2 text-center">
        Copyright &copy; WAN PRODUCTION - {{ date('Y') }}
    </footer>

    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
