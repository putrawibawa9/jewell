<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewell Bali - Foto Jewell</title>

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="header">
        <ul>
            <li style="margin-left: 10px;"><a href="dashboarduser.php">Beranda</a></li>
            <li><a href="produk.php">Produk</a></li>
        </ul>
    </div><!--header-->
    <div class="konten1">
        <h1 style="margin-left: 550px">Foto-Foto Ikan</h1>
        <table border="0" style="margin-left: 60px;">
        <?php
            $query = mysqli_query($koneksi, "SELECT * FROM tb_barang");
            $no=1;
            while($result=mysqli_fetch_array($query)){
        ?>
        <tr align="center">
            <td><img src="assets/images/<?php echo $result['gambar'];?>" width="300"></td>
        </tr>
        <?php } ?>
        </table>
    </div><!--konten1-->
    <div class="footer"><p style="text-align: center; padding-top: 10px; color: white;">Copyright &copy; 2024, Ikan Louhan Bali.</p></div><!--footer-->
</body>
</html>