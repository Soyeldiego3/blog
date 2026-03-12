<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pagina Wee</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="main-container">
        <img src="{{ asset('images/miku.gif') }}" class="app-corner-gif mikudayo">
        <img src="{{ asset('images/cute-anime.webp') }}" class="app-corner-gif-left pupue">
        <div class="app-border">
            <div class="custom-content">
                <div class="header-background header-align">
                    <div class="position-relative d-flex align-items-center justify-content-end w-100 px-3">
                        <div class="position-absolute start-50 translate-middle-x">
                            <a href="/"><img src="{{ asset('images/logo.png') }}" alt="Logo" class="site-logo"></a>
                        </div>
                        <a href="/login">
                            <img src="{{ asset('images/login.png') }}" class="login-button">
                        </a>
                    </div>
                </div>
                <div class="row mx-0">
                    <div class="col-2 sidebar-container sidebar-left d-none d-md-block">
                        {{ $sidebar_left ?? '' }}
                    </div>
                    <div class="col-12 col-md-8">
                        {{ $slot }}
                    </div>
                    <div class="col-2 sidebar-container sidebar-right d-none d-md-block">
                        {{ $sidebar_right ?? '' }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>