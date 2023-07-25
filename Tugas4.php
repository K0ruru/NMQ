<?php
$angka = 125; //mebuat variabel angka pertama dengan data 125
$angka2 = 125; //sama dengan yang diatas 

echo "Bilangan kelipatan 5 antara 125 sampai dengan 200 (menggunakan while):<br>";
while ($angka <= 200) { //membuat while loop untuk angka selagi dia dibawah 200
  // membuat statement if jika angka nya dibagi 5 dan sisa baginya adalah 0 maka dia akan di print
  if ($angka % 5 == 0) {
    echo $angka . " ";
  }
  $angka++; //untuk menambah value angka agar dabat diulang kembali sampai parameter while nya tercapai
}

echo "<br><br>Bilangan kelipatan 5 antara 125 sampai dengan 200 (menggunakan do..while):<br>";

// membuat do while loop dimana jika angka2 dibagi 5 dan sisa baginya adalah 0 maka dia akan di print
do {
  if ($angka2 % 5 == 0) {
    echo $angka2 . " ";
  }
  $angka2++;
} while ($angka2 <= 200); //untuk menentukan berapa lama loop nya berjalan

echo "<br><br>";

for ($i = 1; $i <= 3; $i++) { //membuat for loop dimana jika i adalah 1 dan jika i kurang dari / sama dengan 3 
  for ($j = 1; $j <= 3; $j++) { // sama dengan yang diatas hanya saja variabel nya j
    echo "A" . $i . $j . " "; // akan meng-print varibel i dan j untuk tiap loop nya berjalan dan akan mengahsilkan A11, A12, A13 
  }
  echo "<br>";
}
?>