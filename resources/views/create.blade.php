<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="/create.css">

        <title>Menambahkan Buku Baru</title>
    </head>
    <body>
        <div style="background-color:slategray;">
        <div class="container">
            <br><h1 style="color:seashell;">Menambahkan Buku Baru</h1><br>
        </div>
        </div>
        <br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <form action="/stores" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="judul">Judul</label>
                            <input type="text" minlength="5" maxlength="20" name="judul" class="form-control" id="judul" placeholder="Judul Buku">
                        </div>
                        <div class="form-group">
                            <label for="penulis">Penulis</label>
                            <input type="text" minlength="5" maxlength="20" name="penulis" class="form-control" id="penulis" placeholder="Penulis Buku">
                        </div>
                        <div class="form-group">
                            <label for="halaman">Jumlah Halaman</label>
                            <input type="number" min="0" name="halaman" class="form-control" id="halaman" placeholder="Jumlah Halaman">
                        </div>
                        <div class="form-group">
                           <label for="tahun">Tahun Terbit</label>
                            <input type="number" min="2000" max="2021" name="tahun" class="form-control" id="tahun" placeholder="Tahun Terbit">
                        </div>
                        <a href="/" class="btn btn-danger">Kembali</a>
                        <button class="btn btn-success">Tambah</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
        -->
    </body>
</html>