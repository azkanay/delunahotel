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
<body style="overflow-x: hidden; padding-top: 5rem;">
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

        <div class="container">

            <div class="table-wrapper" style="padding-top: 5rem;">
                <table class="table table-hover" id="kamar">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Jumlah Kamar</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Classic 1</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>Classic 2</td>
                            <td>26</td>
                        </tr>
                        <tr>
                            <td>Superior</td>
                            <td>22</td>
                        </tr>
                        <tr>
                            <td>Deluxe</td>
                            <td>10</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="table-wrapper" style="padding-top: 5rem;">
                <!--Tabel fasilitas kamar !-->
                <table class="table table-hover mt-5" id="fkamar">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Tipe Kamar</th>
                            <th scope="col">Fasilitas</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kamar as $item)
                            <tr>
                                <td>{{ $item->tipe_kamar}}</td>
                                <td>{{ $item->fasilitas_kamar}}</td>
                                <td>
                                    <div class="d-flex">
                                        <a href= "{{route('edit.view.rooms', $item->id)}}" class="btn btn-info btn-sm me-2">Edit</a>
                                        <form action="{{route('delete.rooms', $item->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <div class="table-wrapper" style="padding-top: 5rem;">
                <!--Tabel fasilitas hotel !-->
                <table class="table table-hover mt-5" id="fhotel">
                    <thead class="table-secondary">
                        <tr>
                            <th scope="col">Fasilitas</th>
                            <th scope="col">Gambar</th>
                            <th scope="col">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fasilitas as $item)
                            <tr>
                                <td>{{ $item->nama_fasilitas}}</td>
                                <td>
                                    <img src="{{ $item->image}}" alt="" style="width: 200px; height:150px; border-radius: 1rem;"> 
                                </td>
                                <td>
                                    <div class="d-flex">
                                        <a href= "{{route('edit.view.fasilities', $item->id)}}" class="btn btn-info btn-sm me-2">Edit</a>
                                        <form action="{{route('delete.fasilities', $item->id)}}" method="POST">
                                            @csrf
                                            @method('delete')
                                        <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
</body>
</html>