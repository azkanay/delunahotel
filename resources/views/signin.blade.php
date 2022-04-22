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
                <a class="navbar-brand" style="color: #1119ea" href="/admin">Admin</a>
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

        <div class="row" style="margin-top: 5rem;">
            <div class="col-5 mt-5 mb-2 text-center" style="margin-left: 5rem">
                <div class="card mt-5 ms-5">
                    <div class="card-body">
                        <h5 class="card-title ms-3 mt-3">Masuk</h5>
                        <form action="/login" class="mt-5" method="POST">
                            @csrf
                            <div class="d-flex justify-content-between w-100">
                                <label for="" class="ms-3">Email</label>
                                <input type="text" class="form-control w-75 me-2" name="username" placeholder="default input">
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <label for="" class="ms-3">Password</label>
                                <input type="password" class="form-control w-75 me-2" name="password">
                            </div>

                            <div class="d-flex justify-content-end mt-4 me-2">
                                <a href="/resepsionis" class="resepsionis">Masuk sebagai resepsionis</a>
                                <button class="btn btn-secondary" type="submit" href="/admin">Masuk</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-5 mt-5 ms-5">
                <img src="img/group14.png" class="rounded float-end" alt="poto">
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
            </div>
        </div>

        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{ asset('js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>