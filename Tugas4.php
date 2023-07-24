<?php
$angka = 125;
$angka2 = 125;

echo "Bilangan kelipatan 5 antara 125 sampai dengan 200 (menggunakan while):<br>";
while ($angka <= 200) {
  if ($angka % 5 == 0) {
    echo $angka . " ";
  }
  $angka++;
}

echo "<br><br>Bilangan kelipatan 5 antara 125 sampai dengan 200 (menggunakan do..while):<br>";
do {
  if ($angka2 % 5 == 0) {
    echo $angka2 . " ";
  }
  $angka2++;
} while ($angka2 <= 200);

echo "<br><br>";

for ($i = 1; $i <= 3; $i++) {
  for ($j = 1; $j <= 3; $j++) {
    echo "A" . $i . $j . " ";
  }
  echo "<br>";
}
?>