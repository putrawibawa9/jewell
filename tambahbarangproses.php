<?php
    include "koneksi.php";

    $namabarang=$_POST["namabarang"];
    $deskripsi=$_POST["desk"];
    $stok=$_POST["stok"];
    $harga=$_POST["harga"];
    $nama_file = $_FILES['gambar']['name'];
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $tmp_file = $_FILES['gambar']['tmp_name'];
    $tanggalinput=$_POST["tanggal"];

    $path = "assets/images/".$nama_file;
    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
        if($ukuran_file <= 10000000){
            if(move_uploaded_file($tmp_file, $path)){
                $query = "INSERT INTO tb_barang (nama_barang, deskripsi, stok, harga, gambar, tanggal_input) VALUES ('".$namabarang."', '".$deskripsi."', '".$stok."', '".$harga."', '".$nama_file."', '".$tanggalinput."')";
                $sql = mysqli_query($koneksi, $query);
                if($sql){ 
                    header("location: admin.php");
                }
                else{
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                    echo "<br><a href='tambahbarang.php'>Kembali Ke Form</a>";
                }
            }
            else{
                echo "Maaf, Gambar gagal untuk diupload.";
                echo "<br><a href='tambahbarang.php'>Kembali Ke Form</a>";
            }
        }
        else{
            echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 10MB";
            echo "<br><a href='tambahbarang.php'>Kembali Ke Form</a>";
        }
    }
    else{
        echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
        echo "<br><a href='tambahbarang.php'>Kembali Ke Form</a>";
    }
?>