<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
<div class="container pt-3">
        <h1 class="text-left">Toko Wayang Kami</h1>
        <p class="text-md-start">Program Aplikasi sederhana untuk menghitung penjualan barang Toko Wayang Kami</p>
</div>
<div class="container">
<form action="" method="POST" name="penjualan">
  <div class="form-group">
    <label for="nm_brg">Nama Barang</label>
    <input type="text" class="form-control" name="nm_brg" id="nm_brg" placeholder="">
  </div>
  <div class="form-group">
    <label for="hrg_brg">Harga Barang</label>
    <input type="number" name="h_brg" class="form-control" id="hrg_brg" placeholder="">
  </div>
  <div class="form-group">
    <label for="diskon">Diskon</label>
    <input type="text"name="diskon" class="form-control" id="diskon" placeholder="">
  </div>
  <div class="form-group">
    <label for="jml_brg">Jumlah Barang</label>
    <input type="number"name="jml_brg" class="form-control" id="jml_brg" placeholder="">
  </div>
  <button type="submit" name= "sumbit" class="btn btn-primary">Hitung</button>
</form>
</div>

<?php 
if(isset($_POST['sumbit'])){
  $nama = $_POST['nm_brg'];
  $harga = $_POST['h_brg'];
  $jumlah = $_POST['jml_brg'];
  $diskon = $_POST['diskon'];
  $total= $harga * $jumlah;
  $diskon = 0.4 * $total;
  $totalSetelahDiskon = $total - $diskon;

  echo "<div class='container'>";
  echo "<h1>Jumlah yang harus dibayarkan:</h1>";
  echo "<h4>Nama Barang: $nama</h4>";
  echo "<h4>Harga Barang: $harga</h4>";
  echo "<h4>Jumlah Barang: $jumlah</h4>";
  echo "<h4>Diskon : $diskon % </h4>"; 
  echo "<h4>Total Pembayaran Setelah Diskon : Rp. " .number_format($totalSetelahDiskon). "</h4>";
  echo "</div>";
}
?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>