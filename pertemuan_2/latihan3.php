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
        <h1 class="text-left">Kelulusan</h1>

</div>
<div class="container">
<form action="" method="POST" name="penilaian">
  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" id="nm_brg" placeholder="">
  </div>
  <div class="form-group">
    <label for="kls">Kelas</label>
    <input type="text" name="kls" class="form-control" id="kls" placeholder="">
  </div>
  <div class="form-group">
    <label for="nilai_p">Nilai Produktif</label>
    <input type="number"name="nilai_p" class="form-control" id="nilai_p" placeholder="">
  </div>
  <div class="form-group">
    <label for="nilai_n">Nilai Normatif</label>
    <input type="number"name="nilai_n" class="form-control" id="nilai_n" placeholder="">
  </div>
  <div class="form-group">
    <label for="nilai_m">Nilai Mulok</label>
    <input type="number"name="nilai_m" class="form-control" id="nilai_m" placeholder="">
  </div>
  <button type="submit" name= "sumbit" class="btn btn-primary">Submit</button>
</form>
</div>

<?php 
if(isset($_POST['sumbit'])){
    $nama = $_POST['nama'];
    $kelas = $_POST['kls'];
    $nilaiProduktif = $_POST['nilai_p'];
    $nilaiNormatif = $_POST['nilai_n'];
    $nilaiMulok = $_POST['nilai_m'];
    $totalnilai = $nilaiProduktif + $nilaiNormatif + $nilaiMulok;
    $nilairata_rata = $totalnilai / 3;

    if ($nilaiProduktif > 90){
        $gradeProduktif = "A";
} elseif ($nilaiProduktif > 80){
        $gradeProduktif = "B";
} elseif ($nilaiProduktif > 70){
    $gradeProduktif = "C";
} elseif ($nilaiProduktif > 60){
    $gradeProduktif = "D";
} elseif ($nilaiProduktif > 50){
    $gradeProduktif = "Tidak Lulus";
}

if ($nilaiNormatif > 90){
    $gradeNormatif = "A";
} elseif ($nilaiNormatif > 80){
    $gradeNormatif = "B";
} elseif ($nilaiNormatif > 70){
    $gradeNormatif = "C";
} elseif ($nilaiNormatif > 60){
    $gradeNormatif = "D";
} elseif ($nilaiNormatif > 50){
    $gradeNormatif = "Tidak Lulus";
}

if ($nilaiMulok > 90){
    $gradeMulok = "A";
} elseif ($nilaiMulok > 80){
    $gradeMulok = "B";
} elseif ($nilaiMulok > 70){
    $gradeMulok = "C";
} elseif ($nilaiMulok > 60){
    $gradeMulok = "D";
} elseif ($nilaiMulok > 50){
    $gradeMulok = "Tidak Lulus";
}

$ketp = $nilaiProduktif >= 70 ? "Lulus" : "Tidak Lulus";
$ketn = $nilaiNormatif >= 70 ? "Lulus" : "Tidak Lulus";
$ketm = $nilaiMulok >= 70 ? "Lulus" : "Tidak Lulus";
$ketr = $nilairata_rata >= 70 ? "Lulus" : "Tidak Lulus";

echo "<div class='container mt-3'>";
echo "<h5>Nama  : $nama </h5>"; 
echo "<h5>Kelas : $kelas </h5>";
}
?>

<table class='table table-bordered'>
<thead>
  <tr>
    <th scope='col'>No</th>
    <th scope='col'>Mapel</th>
    <th scope='col'>Nilai</th>
    <th scope='col'>Grade</th>
    <th scope='col'>Keterangan</th>
  </tr>
</thead>
<tbody>
  <tr>
    <th scope='row'>1</th>
    <td>Produktif</td>
    <td><?php echo $nilaiProduktif ?></td>
    <td><?php echo $gradeProduktif ?></td>
    <td><?php echo $ketp ?></td>
  </tr>
  <tr>
    <th scope='row'>2</th>
    <td>Normatif</td>
    <td><?php echo $nilaiNormatif ?></td>
    <td><?php echo $gradeNormatif ?></td>
    <td><?php echo $ketn ?></td>
  </tr>
  <tr>
    <th scope='row'>3</th>
    <td>Mulok</td>
    <td><?php echo $nilaiMulok ?></td>
    <td><?php echo $gradeMulok ?></td>
    <td><?php echo $ketm ?></td>
  </tr>
</tbody>
</table>


<div class = "d-flex justify-content-between">
  <h5>Nilai Rata-Rata</h5>
  <h5><?php echo $nilairata_rata ?></h5>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>