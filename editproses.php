<?php
    include "koneksi.php";

    $id=$_POST["id"];
    $namaikan=$_POST["namabarang"];
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
                $query = "UPDATE tb_barang SET nama_barang='$namaikan', deskripsi='$deskripsi', stok='$stok', harga='$harga', gambar='$nama_file', tanggal_input='$tanggalinput' WHERE id_barang='$id'";
                $sql = mysqli_query($koneksi, $query);
                if($sql){ 
                    header("location: admin.php");
                }
                else{
                    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
                    echo "<br><a href='tambahikan.php'>Kembali Ke Form</a>";
                }
            }
            else{
                echo "Maaf, Gambar gagal untuk diupload.";
                echo "<br><a href='tambahikan.php'>Kembali Ke Form</a>";
            }
        }
        else{
            echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 10MB";
            echo "<br><a href='tambahikan.php'>Kembali Ke Form</a>";
        }
    }
    else{
        echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
        echo "<br><a href='tambahikan.php'>Kembali Ke Form</a>";
    }
?>