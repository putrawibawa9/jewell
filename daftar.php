<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewell Bali - Daftar Akun</title>
    <!--Booststrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="main.css">
</head>
<style>
    h3,h6{
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    }
    input{
        margin-bottom: 10px;
    }
</style>
<body>
    <div class="konten">
        <div class="card" style="width: 30%; margin-left: 450px; margin-top: 30px; border-radius: 10px">
            <div class="card-body" style="align-items: center; text-align: center;"><h3>DAFTAR AKUN</h3></div>
            <div class="card-body" style="align-items: center; margin-left: 100px;">
                <form action="daftarproses.php" method="post">
                    <h6>Nama Lengkap</h6>
                    <input type="text" name="nama" id="" placeholder="Masukan Nama Lengkap">
                    <h6>Username</h6>
                    <input type="text" name="username" id="" placeholder="Masukan Username">
                    <h6>Password</h6>
                    <input type="password" name="pass" id="" placeholder="Masukan Password">
                    <h6>Alamat</h6>
                    <input type="text" name="alamat" id="" placeholder="Masukan Alamat">
                    <h6>Jenis Kelamin</h6>
                    <input type="radio" name="jk" id="" value="L">Laki-Laki
                    <input type="radio" name="jk" id="" value="P">Perempuan
                    <h6>Nomer Handphone</h6>
                    <input type="number" name="nohp" id="" placeholder="Masukan Nomer Handphone">
                    <h6>Tanggal Lahir</h6>
                    <input type="date" name="tanggallahir" id="">
                    <br><br>
                    <button type="submit" class="btn btn-primary">DAFTAR</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </form>
            </div>
        </div>
    </div><!--konten-->
</body>
</html>