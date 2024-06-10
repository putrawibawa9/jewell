<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewell Bali - Halaman Admin</title>
    <!--Booststrap css-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="main.css">
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="admin.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="konfirmasi.php">Konfirmasi Pembelian</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Logout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dokter2/index.php">Dokter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="kontenn" style="padding-top: 10px;">
    <h3 style="text-align: center;">DATA JEWELL BALI</h3>
    <a href="tambahbarang.php" class="btn btn-primary" style="margin-bottom: 10px; margin-left:50px;">Tambah Data</a>
    <table class="table table-striped">
        <tr align="center">
            <td>No</td>
            <td>ID Barang</td>
            <td>Nama Barang</td>
            <td>Deskripsi</td>
            <td>Stok</td>
            <td>Harga</td>
            <td>Gambar</td>
            <td>Tanggal Input</td>
            <td>Action</td>
        </tr>
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_barang");
            $no=1;
            while($result=mysqli_fetch_array($query)){
        ?>
        <tr align="center">
            <td><?php echo $no++?></td>
            <td><?php echo $result['id_barang'];?></td>
            <td><?php echo $result['nama_barang'];?> </td>
            <td><?php echo $result['deskripsi'];?> </td>
            <td><?php echo $result['stok'];?></td>
            <td><?php echo $result['harga'];?></td>
            <td><img src="assets/images/<?php echo $result['gambar'];?>" width="150"></td>
            <td><?php echo $result['tanggal_input'];?></td>
            <td><a href="edit.php?id=<?php echo $result['id_barang']; ?>" class="btn btn-success">Edit</a> | <a href="delete.php?id=<?php echo $result['id_barang']; ?>" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')">Hapus</a></td>
        </tr>
        <?php
            }
        ?>
    </table>
</div><!--kontenn-->
</body>
</html>