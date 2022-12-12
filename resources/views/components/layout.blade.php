<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->

    @vite(['resources/sass/app.scss','resources/js/app.js'])

</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand fs-1" href="#">Gor Sampel</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link" href="/">HOME</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/#daftarLapangan">DAFTAR LAPANGAN</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/sewa">SEWA</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="/#contact">KONTAK</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="isi container-fluid">
        {{$slot}}
    </div>

</body>
</html>
