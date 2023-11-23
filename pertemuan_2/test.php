<?php 
$nilai_a = 87;
$nilai_b = 87;
$nilai_a = $nilai_a + 10;
$nilai_b += 10;
echo "nilai_a adalah $nilai_a <br>";
echo "nilai_b adalah $nilai_b <br>";


$tambah = 100;
$tambah++;
$kurang = 100;
$kurang--;
echo "Hasil dari tambah++ adalah $tambah <br>";
echo "Hasil dari kurang-- adalah $kurang <br>";


$a = 20;
$b = 10;
$c = $a > $b;
echo "$a > $b: $c <br>";
$c = $a < $b;
echo "$a < $b: $c <br>";
$c = $a == $b;
echo "$a == $b: $c <br>";


$a = true;
$b = false;
$c = $a && $b;
printf("%b && %b = %b", $a,$b,$c);
echo "<br>";
var_dump($c);
echo "<br>";
$c = $a || $b;
printf("%b || %b = %b", $a,$b,$c);
echo "<br>";
var_dump($c);
echo "<br>";
$c = !$a;
printf("!%b = %b", $a,$c);
echo "<br>";
var_dump($c);
echo "<br>";


$cuacaPanas = true;
$jawaban = $cuacaPanas ? "panas": "Tidak Panas";
echo "$jawaban"
?>