<?php
    include 'koneksi.php';

    $id_bar=$_GET['id'];

    $query="DELETE FROM tb_barang WHERE id_barang=$id_bar";
    $sql=mysqli_query($koneksi, $query);
    if($sql){
        header("location: admin.php");
    }
    else{
        echo "Maaf, Buku Gagal Dihapus";
        echo "<br><a href='admin.php'>Kembali Ke Halaman Admin</a>";
    }
?>