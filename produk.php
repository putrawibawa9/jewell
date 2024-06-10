<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewell Bali - Produk</title>

    <link rel="stylesheet" href="assets/css/main.css">
    
</head>
<body>
    <div class="header">
        <ul>
            <li style="margin-left: 10px;"><a href="dashboarduser.php">Beranda</a></li>
        </ul>
    </div><!--header-->
    <div class="konten1" style="margin-left: 100px;">
        <table border="1">
            <tr align="center">
                <td>No</td>
                <td>ID Ikan</td>
                <td>Gambar</td>
                <td>Nama Ikan</td>
                <td>Deskripsi</td>
                <td>Harga</td>
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
            <td><img src="assets/images/<?php echo $result['gambar'];?>" width="150"></td>
            <td><?php echo $result['nama_barang'];?> </td>
            <td><?php echo $result['deskripsi'];?> </td>
            <td><?php echo $result['harga'];?></td>
            <td><a href="formulir.php?id=<?php echo $result['id_barang']; ?>" class="btn btn-success">Beli</a></td>
        </tr>
        <?php
            }
        ?>
        </table>
    </div><!--konten1-->
    <div class="footer"><p style="text-align: center; padding-top: 10px; color: white;">Copyright &copy; 2024, Ikan Louhan Bali.</p></div><!--footer-->
</body>
</html>