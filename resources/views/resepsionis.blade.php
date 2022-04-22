<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS!-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    
    <!-- My CSS !-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <title>Deluna Hotel</title>
</head>
<body style="overflow-x: hidden;">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">DELUNAHOTEL</a>
                <a class="navbar-brand" style="color: #1119ea" href="/admin">Resepsionis</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link" href="#kamar">Kamar</a>
                    <a class="nav-link" href="#fkamar">Fasilitas Kamar</a>
                    <a class="nav-link" href="#fhotel">Fasilitas Hotel</a>
                </div>
            </div>
            </div>
        </nav>

        <div class="container" style="margin-top: 110px;">
            <div class="table-wrapper">
                <div class="row">
                    <div class="d-flex justify-content-between mb-3">
                        <div class="title">
                            <h5>Reservasi</h5>
                        </div>
                        <div class="search">
                        <form class="d-flex justify-content-end" style="width: max-content;">
                            <input class="form-control me-3" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                        </div>
                    </div>    
                </div>
            </div>

            <!--Tabel Kamar !-->
            <table class="table table-hover" id="kamar">
                <thead class="table-secondary">
                    <tr>
                        <th scope="col">Nama Tamu</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Haechan Lee</td>
                        <td>06-03-2022</td>
                        <td>11-03-2022</td>
                        <td>Check In</td>
                    </tr>
                    <tr>
                        <td>Johnny Suh</td>
                        <td>06-03-2022</td>
                        <td>10-03-2022</td>
                        <td>Check In</td>
                    </tr>
                    <tr>
                        <td>Park Sooyoung</td>
                        <td>09-03-2022</td>
                        <td>11-03-2022</td>
                        <td>Check In</td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>