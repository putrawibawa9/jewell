<?php
    include 'koneksi.php';

    $nama=$_POST["nama"];
    $username=$_POST["username"];
    $pass=$_POST["pass"];
    $alamat=$_POST["alamat"];
    $jk=$_POST["jk"];
    $nohp=$_POST["nohp"];
    $tanggal=$_POST["tanggallahir"];

    $query="SELECT * FROM tb_user WHERE username='$username' && password='$pass'";
    $result=mysqli_query($koneksi, $query);
    $cek=mysqli_num_rows($result);
    if($cek<0){
        echo "Maaf Data customer sudah ada";
        header("location: daftar.php");
    }
    else{
        $query2="INSERT INTO tb_user (nama_user, username, password, alamat, jenis, no_hp, tanggal_lahir) VALUES ('".$nama."', '".$username."', '".$pass."', '".$alamat."', '".$jk."', '".$nohp."', '".$tanggallahir."')";
        $result2=mysqli_query($koneksi, $query2);
        if($result2){
            header("location: index.php");
        }
        else{
            echo "Gagal Upload Data Anggota";
            header("location: register.php");
        }
    }
?>