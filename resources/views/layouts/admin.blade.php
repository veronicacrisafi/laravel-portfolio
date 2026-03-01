<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    @vite('resources/scss/app.scss')
</head>

<body>
    <header class="admin-header">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Area Admin</h1>
            <a href="/" class="btn btn-outline-light">Home</a>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <nav class="col-md-3 mb-4">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link {{ request()->routeIs('admin.index') ? 'active' : '' }}"
                            href="{{ route('admin.index') }}">Dashboard</a></li>
                </ul>
            </nav>
            <main class="col-md-9 admin-main ms-md-4 mt-4 mt-md-0">
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="text-center text-muted py-4 mt-5">
        &copy; {{ date('Y') }} Il tuo Portfolio Admin
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
