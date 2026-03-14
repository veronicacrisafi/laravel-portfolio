<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>
    @vite('resources/scss/app.scss')
</head>

<body>
    <header class="admin-header">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Area Admin</h1>
            <div>
                <a href="/" class="btn btn-outline-light">Home</a>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-light">Tutti i progetti</a>
            </div>
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
            <main class="col-md-11 admin-main ms-md-4 mt-4 mt-md-0">
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="text-center text-muted py-4 mt-5">
        &copy; {{ date('Y') }} Il tuo Portfolio Admin
    </footer>
</body>

</html>
