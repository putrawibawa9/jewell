<?php
    include 'koneksi.php';

    $id=$_POST["id"];
    $iduser=$_POST["iduser"];
    $idbarang=$_POST["idbarang"];
    $namabarang=$_POST["namabarang"];
    $jumlahbeli=$_POST["jumlahbeli"];
    $harga=$_POST["harga"];
    $status=$_POST["status"];
    $metode=$_POST["mp"];

    $query="UPDATE pembelian SET id_user='$iduser', id_barang='$idbarang', nama_barang='$namabarang',
    jumlah_beli='$jumlahbeli', totalharga='$harga', status='$status', metode_pembayaran='$metode' WHERE id_pembelian='$id'";
    $sql=mysqli_query($koneksi, $query);
    if($sql){
        header("location: konfirmasi.php");
    }
    else{
        header("location: konfirmasi.php");
    }
?>