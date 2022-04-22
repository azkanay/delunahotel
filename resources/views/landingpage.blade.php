<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS!-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">

    <!-- My CSS !-->
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">

    <title>Deluna Hotel</title>
</head>
<body style="overflow-x: hidden;">
        <nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" style="color: #1119ea" href="#">DELUNA</a>
                <a class="navbar-brand" href="#">HOTEL</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                    <a class="nav-link" href="#fal">Fasilitas</a>
                    <a class="nav-link" href="#rooms">Kamar</a>
                    <a class="nav-link" href="#book">Pesan</a>
                    <a class="btn btn-outline-primary" href="{{route('signin')}}">Masuk</a>
                </div>
            </div>
            </div>
        </nav>

        <div class="row mt-5">
            <div class="col-7">
                <h4 style="padding-top: 14rem; padding-left: 11rem;">Selamat Datang!</h4>
                <p style="margin-left: 11rem;">Kami menyediakan apa yang kamu butuhkan<br>
                untuk menikmati liburan kalian bersama keluarga,<br>
                waktu untuk membuat momen berharga lainnya.</p>
            </div>
            <div class="col-5 mt-5 mb-5">
                <img src="img/group6.png" class="landing1" alt="fotolanding" />
            </div>
        </div>

        <!-- Fasilitas !-->
        <div class="row">
            <div class="col-12 ms-5">
                <h4 id="fal" class="mt-5 mb-5" style="padding-left: 13rem;">Fasilitas</h4>
            </div>
            <div class="col-12 text-center">
                <img src="img/group19.png" class="fasilities" alt="facilities" style="width: 1400px; margin-bottom: 7rem;"/>
            </div>
        </div><br><br>

        <!--Kamar !-->
        <div class="row">
            <div class="col-12 ms-5">
                <h4 id="rooms" class="mb-3" style="padding-left: 13rem;">Tipe Kamar</h4>
            </div>
        </div>
        <div style="margin-left: 8rem;">
            <div class="row">
                <div class="col-12 ms-5">
                    <div class="d-flex">
                        <img src="img/typeclassic1.png" 
                        style="margin-left: 5rem;
                        width: 440px;
                        height: 290px;
                        border-radius: 20px;" alt="type1"/>
                        <img src="img/classic1.png" 
                        style="margin-left: 2rem;
                        margin-top: 2rem;
                        height: 200px;
                        width: 600px;" alt="roomtype1"/>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-12 ms-5">
                    <div class="d-flex">
                        <img src="img/typeclassic2.png" 
                        style="margin-left: 5rem;
                        width: 440px;
                        height: 290px;
                        border-radius: 20px;" alt="type1"/>
                        <img src="img/classic2.png" 
                        style="margin-left: 2rem;
                        margin-top: 2rem;
                        height: 200px;
                        width: 600px;" alt="roomtype1" alt="roomtype2"/>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-12 ms-5">
                    <div class="d-flex">
                        <img src="img/typesuperior.png" 
                        style="margin-left: 5rem;
                        width: 440px;
                        height: 290px;
                        border-radius: 20px;" alt="type1"/>
                        <img src="{{asset('img/superior.png')}}" 
                        style="margin-left: 2rem;
                        margin-top: 2rem;
                        height: 200px;
                        width: 600px;" alt="roomtype3"/>
                    </div>
                </div>
            </div><br><br>
            <div class="row">
                <div class="col-12 ms-5">
                    <div class="d-flex">
                        <img src="img/typedeluxe.png" 
                        style="margin-left: 5rem;
                        width: 440px;
                        height: 290px;
                        border-radius: 20px;" alt="type1"/>
                        <img src="img/deluxe.png" 
                        style="margin-left: 2rem;
                        margin-top: 2rem;
                        height: 200px;
                        width: 600px;" alt="roomtype1" alt="roomtype4"/>
                    </div>
                </div>
            </div>
        </div><br><br><br>

        <!--Form Pemesanan!-->
        <form action="{{ route('store.booking') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                <div class="card card text-dark bg-light d-flex justify-content-center ms-5" style="max-width: 30rem;">
                    <div class="card-body">
                        <p class="card-text"></p>
                            <h4 class="card-title text-center" id="book">Form Pemesanan</h4><br>

                            <div class="container">
                                <div class="row">
                                    <div class="col-6 col-sm-4 mt-2">Check-in</div>
                                    <div class="col-6 col-sm-8">
                                        <input class="form-control" name="check_in" type="date" @error('check_In') is-invalid @enderror name="check_in" id="check_in" placeholder="default input" aria-label="default input example" autocomplete="off" required>                                            
                                        @error('check_In')
                                        <div class="invalid-feedback"> 
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div><br><br>
                                    <div class="w-100 d-none d-md-block"></div>
                                    <div class="col-6 col-sm-4 mt-2 mb-2">Check-out</div>
                                    <div class="col-6 col-sm-8 sb-2">
                                        <input class="form-control" name="check_out" type="date" placeholder="default input" aria-label="default input example">
                                    </div>
                                        @error('check_Out')
                                        <div class="invalid-feedback"> 
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-6 col-sm-4 mt-2">Nama Pemesan</div>
                                    <div class="col-6 col-sm-8 mt-1">
                                        <input class="form-control" type="text" placeholder="default input" aria-label="default input example">
                                        @error('nama_pemesan')
                                        <div class="invalid-feedback"> 
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div><br><br>
                                    <div class="w-100 d-none d-md-block"></div>
                                    <div class="col-6 col-sm-4 mt-2">Email</div>
                                    <div class="col-6 col-sm-8">
                                        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                                    </div>
                                        @error('email')
                                        <div class="invalid-feedback"> 
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-6 col-sm-4 mt-3">No. Handphone</div>
                                    <div class="col-6 col-sm-8 mt-2 mb-2">
                                        <input class="form-control" name="no_Handphone" type="text" placeholder="default input" aria-label="default input example">
                                        @error('no_Handphone')
                                        <div class="invalid-feedback"> 
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div><br><br>
                                    <div class="w-100 d-none d-md-block"></div>
                                    <div class="col-6 col-sm-4 mt-2 mb-2">Nama Tamu</div>
                                    <div class="col-6 col-sm-8 mb-2">
                                        <input class="form-control" name="nama_tamu" type="text" id="exampleFormControlInput1" placeholder="default input" aria-label="default input example">
                                    </div>
                                        @error('nama_tamu')
                                        <div class="invalid-feedback"> 
                                            {{ $message }}
                                        </div>
                                        @enderror
                                </div>
                            </div>

                            <div class="container">
                                <div class="row">
                                    <div class="col-6 col-sm-4 mt-2">Tipe Kamar</div>
                                    <div class="col-6 col-sm-8">
                                        <select class="form-select" name="tipe_kamar" aria-label="default select example">
                                        <option selected>Pilih Tipe Kamar</option>
                                            <option value="1">Classic1</option>
                                            <option value="2">Classic2</option>
                                            <option value="3">Superior</option>
                                            <option value="4">Deluxe</option>
                                        </select>
                                    </div><br><br>
                                    <div class="w-100 d-none d-md-block"></div>
                                    <div class="col-6 col-sm-4 mt-2">Jumlah Kamar</div>
                                    <div class="col-6 col-sm-8">
                                        <input class="form-control" name="jumlah_kamar" type="text" placeholder="default input" aria-label="default input example">
                                    </div>
                                </div><br>
                            </div>

                            <div class="text-center">
                                <button class="btn btn-secondary" type="submit">Konfirmasi Pemesanan</button>
                            </div>
                    </div>
                </div>
            </div>   
        </div>
        </form>
        
        <!--Footer !-->
        <footer>
            <div class="row mt-5 ms-5 mb-3">
                <div class="col-5" style="margin-left: 7rem;">
                    <a style="color: #1119ea">DELUNA</a><a> HOTEL</a>
                    <p>booking sekarang!</p>
                </div>
                <div class="col-3">
                    <h6>Hubungi Kami</h6>
                </div>
                <div class="col-4 mb-3" style="margin-left: -15rem;">
                    <p>delunahotel@gmail.com</p>
                    <p>0821-1234-5678</p>
                </div>
            </div>
        </footer>

        <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="{{ asset('js/popper.min.js') }}" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>