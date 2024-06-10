<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewell Bali - Daftar Pembelian Jewell</title>

    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <div class="header">
        <ul>
            <li style="margin-left: 10px;"><a href="dashboarduser.php">Beranda</a></li>
            <li><a href="produk.php">Produk</a></li>
        </ul>
    </div><!--header-->
    <div class="konten2">
        <h2 style="text-align: center;">Daftar Pembelian Customer</h2>
    <table border="1" style="margin-left: 350px;">
            <tr align="center">
                <td>No</td>
                <td>ID Pembelian</td>
                <td>ID User</td>
                <td>ID Ikan</td>
                <td>Nama Ikan</td>
                <td>Jumlah Beli</td>
                <td>Total Harga</td>
                <td>Status</td>
                <td>Metode Pembayaran</td>
            </tr>
            <?php
            $query = mysqli_query($koneksi, "SELECT * FROM pembelian");
            $no=1;
            while($result=mysqli_fetch_array($query)){
        ?>
        <tr align="center">
            <td><?php echo $no++?></td>
            <td><?php echo $result['id_pembelian'];?></td>
            <td><?php echo $result['id_user'];?></td>
            <td><?php echo $result['id_barang'];?></td>
            <td><?php echo $result['nama_barang'];?> </td>
            <td><?php echo $result['jumlah_beli'];?> </td>
            <td><?php echo $result['totalharga'];?></td>
            <td><?php echo $result['status'];?></td>
            <td><?php echo $result['metode_pembayaran'];?></td>
        </tr>
        <?php
            }
        ?>
        </table>
    </div><!--konten1-->
    <div class="footer"><p style="text-align: center; padding-top: 10px; color: white;">Copyright &copy; 2024, Ikan Louhan Bali.</p></div><!--footer-->
</body>
</html>