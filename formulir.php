<?php
    include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jewell Bali - Pembelian Jewell</title>
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
        <div class="card" style="width: 30%; margin-left: 450px; margin-top: 10px; border-radius: 10px">
            <div class="card-body" style="align-items: center; text-align: center;"><h3>FORMULIR PEMBELIAN</h3></div>
            <div class="card-body" style="align-items: center; margin-left: 100px;">
                <?php
                $id=$_GET["id"];
                $query = mysqli_query($koneksi, "SELECT * FROM tb_barang WHERE id_barang='$id'");
                while($result=mysqli_fetch_array($query)){
                ?>
                <form action="pembelianproses.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?php echo $id?>">
                    <h6>ID User</h6>
                    <input type="text" name="iduser" id="" placeholder="Masukan ID User">
                    <h6>ID Ikan</h6>
                    <input type="text" name="idbarang" id="" value="<?php echo $result["id_barang"]; ?>">
                    <h6>Nama Ikan</h6>
                    <input type="text" name="namabarang" id="" value="<?php echo $result["nama_barang"]; ?>" readonly>
                    <h6>Jumlah Beli</h6>
                    <input type="number" name="jumlahbeli" id="" placeholder="Masukan Jumlah Beli" >
                    <h6>Harga</h6>
                    <input type="number" name="harga" id="" value="0" readonly>
                    <h6>Metode Pembayaran</h6>
                    <input type="radio" name="mp" id="" value="cod">COD (Cash On Delivery) <br>
                    <input type="radio" name="mp" id="" value="paylater">Paylater<br>
                    <input type="radio" name="mp" id="" value="tf">Transfer Bank<br>
                    <input type="radio" name="mp" id="" value="mbg">M-Banking
                    <br><br>
                    <button type="submit" class="btn btn-primary">BELI</button>
                    <button type="reset" class="btn btn-danger">RESET</button>
                </form>
            </div>
        </div>
        <?php } ?>
    </div><!--konten-->
</body>
</html>