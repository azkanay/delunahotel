<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    />

    <!-- Bootstrap CSS -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

    <title>YouthPalace | Bukti Pemesanan</title>
</head>
<body class="img-bg">
    <!-- Bukti -->
        <div id="pesan" class="row justify-content-center">
            <div class="col-7">    
                <div class="card">
                    <div class="card-header">
                        <h1>Youth<b>Palace</b></h1>
                        <h6 class="text-center">Tangkap layar laman ini sebagai bukti pemesanan kepada resepsionis.</h6>
                    </div>
                    <div class="card-body">
                        <h4 class="card-title text-center">Bukti Pemesanan</h4>
                        <p>Pemesanan atas nama {{ $item->nam_pemesan }}, dengan detail:<br>
                        1. Tanggal check_in: {{ $item->check_in }}<br>
                        2. Tanggal check_out: {{ $item->check_out }}<br>
                        3. Email: {{ $item->email }}<br>
                        4. Nomor Hp: {{ $item->nomor_hp }}<br>
                        5. Nama Tamu: {{ $item->nama_tamu }}<br>
                        6. Tipe Kamar: {{ $item->tipe_kamar }}<br>
                        7. Jumlah Kamar: {{ $item->jumlah_kamar }}<br>
                        8. Total Harga: {{ $item->harga_kamar }}</p>                        
                        <a href="/" class="btn btn-dark mb-3">Selesai</a>
                    </div>
                </div>
            </div>
        </div>
    <!-- Akhir Bukti -->

    <!-- Footer -->
        <footer id="footers" class="text-white text-center" style="background-color: #000000">
            <p>Created by <a href="https://www.instagram.com/ynsh_pi/" class="text-white fw-bold">Harpiyansah</a></p>
        </footer>
    <!-- Akhir Footer-->
</body>
</html>