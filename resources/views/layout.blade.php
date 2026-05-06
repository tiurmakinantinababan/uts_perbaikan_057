<!DOCTYPE html>
<html>
<head>
    <title>Sistem Klinik</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="#">Sistem Klinik</a>

        <a href="/pasien" class="btn btn-light">
            Daftar Pasien
        </a>
    </div>
</nav>

<div class="container mt-4">
    @yield('content')
</div>

</body>
</html>
