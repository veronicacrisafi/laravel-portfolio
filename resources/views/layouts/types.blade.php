<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Types</title>
</head>
@vite(['resources/sass/app.scss', 'resources/js/app.js'])

<body>
    <header class="admin-header">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="mb-0">Tipologie</h1>
            <div>
                <a href="{{ route('projects.index') }}" class="btn btn-outline-light">Progetti</a>
                <a href="{{ route('types.index') }}" class="btn btn-outline-light">Tipologie</a>
                <a href="/" class="btn btn-outline-light">Home</a>
                <a href="{{ route('admin.index') }}" class="btn btn-outline-light">Admin</a>
            </div>
        </div>
    </header>
    <div class="container">
        <div class="row">
            <main class="col-md-11 admin-main ms-md-4 mt-4 mt-md-0">
                <h1 class="mb-5">
                    @yield('title')
                </h1>
                @yield('backLink')
                @yield('content')
            </main>
        </div>
    </div>
    <footer class="text-center text-muted py-4 mt-5">
        &copy; {{ date('Y') }} Il tuo Portfolio Tipologie
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
