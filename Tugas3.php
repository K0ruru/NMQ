<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css-files\Tugas3.css">
  <title>Document</title>
</head>

<body>
  <!-- Membuat form untuk file "Tugas3.php" dan agar form nya memberikan kembali data yang di input dengan "post" -->
  <form action="Tugas3.php" method="post">
    <div class="form__content">
      <h3>Kode & Kuantitas Barang Ke-1</h3>
      <!-- memberikan kolom input yang hanya menrima angka untuk kode barang dan kuantitas barang yang pertama -->
      <input type="number" name="kodeBarang-1" id="" placeholder="Kode Barang">
      <input type="number" name="qty-1" id="" placeholder="Quantity">
      <h3>Kode & Kuantitas Barang Ke-2</h3>
      <!-- memberikan kolom input yang hanya menrima angka untuk kode barang dan kuantitas barang yang kedua -->
      <input type="number" name="kodeBarang-2" id="" placeholder="Kode Barang">
      <input type="number" name="qty-2" id="" placeholder="Quantity">
      <input type="submit">
    </div>
  </form>



  <?php
  // blok code ini digunakan agar saat web file dibuka tidak memberikan warning bahwa ada variabel yang belum diisi
  error_reporting(E_ERROR | E_PARSE);
  ini_set('display_errors', 0);

  // memasukkan data dari kolom inputnya kedalam variabel php dengan method "$_POST"
  $kodeBarang_1 = $_POST["kodeBarang-1"];
  $kodeBarang_2 = $_POST["kodeBarang-2"];
  $qty_1 = $_POST["qty-1"];
  $qty_2 = $_POST["qty-2"];

  // menggunakan switch case untuk mengetahui apa yang di input oleh user agar web mengembalikan data sesuai input user untuk barang pertama
  switch ($kodeBarang_1) {
    case 1:
      $barang = "Mouse Bluetooth 5.0"; //variabel untuk barang 
      $harga = 149999; //variabel untuk harga
      $diskon = 10 / 100; //bariabel untuk diskon karna tidak bisa menulis 10% ditulis 10/100
      $hargaTotal = $harga * $qty_1; //mengkalkulasi harga dengan banyak quantitas barang yang diinput
      $totalDiskon = $hargaTotal * $diskon; // mengkalkulasi banyak diskon yang didapatkan
      $hargaAkhir = $hargaTotal - $totalDiskon; //mengurangi harga total nya dengan banyak diskon yang didapatkan
      break;

    case 2:
      $barang = "Headset External";
      $harga = 246000;
      $diskon = 5 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = $hargaTotal - $totalDiskon;
      break;

    case 3:
      $barang = "Power Bank 10.000 mAh";
      $harga = 136000;
      $diskon = 0 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = $hargaTotal - $totalDiskon;
      break;

    case 4:
      $barang = "Tripod Kamera";
      $harga = 267999;
      $diskon = 20 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = $hargaTotal - $totalDiskon;
      break;

    case 5:
      $barang = "Smart Watch Xiaomi";
      $harga = 899000;
      $diskon = 10 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = $hargaTotal - $totalDiskon;
      break;
    default:
      // pesan ini akan dikirimkan jika user menginput kode barang yang tidak tersedia di data nya
      echo "kamu meng-input kode barang yang tidak tersedia";


  }

  // menggunakan switch case untuk mengetahui apa yang di input oleh user agar web mengembalikan data sesuai input user untuk barang kedua
  
  switch ($kodeBarang_2) {
    case 1:
      $barang_2 = "Mouse Bluetooth 5.0";
      $harga_2 = 149999;
      $diskon_2 = 10 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = $hargaTotal_2 - $totalDiskon_2;
      break;

    case 2:
      $barang_2 = "Headset External";
      $harga_2 = 246000;
      $diskon_2 = 5 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = $hargaTotal_2 - $totalDiskon_2;
      break;

    case 3:
      $barang_2 = "Power Bank 10.000 mAh";
      $harga_2 = 136000;
      $diskon_2 = 0 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = $hargaTotal_2 - $totalDiskon_2;
      break;

    case 4:
      $barang_2 = "Tripod Kamera";
      $harga_2 = 267999;
      $diskon_2 = 20 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = $hargaTotal_2 - $totalDiskon_2;
      break;

    case 5:
      $barang_2 = "Smart Watch Xiaomi";
      $harga_2 = 899000;
      $diskon_2 = 10 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = $hargaTotal_2 - $totalDiskon_2;
      break;
    default:
      echo "kamu meng-input kode barang yang tidak tersedia";


  }


  // membuat function untuk mengubah harga akhirnya menjadi format rupiah
  function formatRupiah($angka)
  {
    return "Rp " . number_format($angka, 0, ',', '.');
  }

  $total = formatRupiah($hargaAkhir + $hargaAkhir_2);

  // membuat tabel untuk Nama barang, kuantitas, banyak diskon, dan subtotal dari data yang di input
  echo "
  <table>
  <tr>
    <th>No</th>
    <th>Nama Barang</th>
    <th>Harga</th>
    <th>Quantity</th>
    <th>Diskon</th>
    <th>Subtotal</th>
  </tr>
  <tr>
    <td>1</td>
    <td>$barang</td> 
    <td>" . formatRupiah($harga) . "</td>
    <td>$qty_1</td>
    <td>" . $diskon * 100 . "%</td>
    <td>" . formatRupiah($hargaAkhir) . "</td>
  </tr>
  <tr>
    <td>2</td>
    <td>$barang_2</td>
    <td>" . formatRupiah($harga_2) . "</td>
    <td>$qty_2</td>
    <td>" . $diskon_2 * 100 . "%</td>
    <td>" . formatRupiah($hargaAkhir_2) . "</td>
    </tr>
</table> <br><br>
  ";

  echo "Total Bayar : $total";

  ?>
</body>

</html>