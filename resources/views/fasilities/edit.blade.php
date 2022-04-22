<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap CSS!-->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>

    <!-- My CSS !-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center align-items-center mt-5">
            <div class="col-6">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('update.fasilities', $item->id)}}" method="POST">
                        @csrf
                        @method('patch')
                        <div class="row">
                            <div class="col-4">
                                <label for="fasilitas">Nama Fasilitas</label>
                            </div>
                        <div class="col-8">
                            <input type="text" class="form-control w-100" name="nama_fasilitas" value="{{ $item-> nama_fasilitas}}">
                        </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-12">
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-success btn-sm">Simpan</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>