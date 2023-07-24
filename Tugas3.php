<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css-files\Tugas3.css">
  <title>Document</title>
</head>

<body>
  <form action="Tugas3.php" method="post">
    <h3>Kode & Kuantitas Barang Ke-1</h3>
    <input type="number" name="kodeBarang-1" id="" placeholder="Kode Barang">
    <input type="number" name="qty-1" id="" placeholder="Quantity">
    <h3>Kode & Kuantitas Barang Ke-2</h3>
    <input type="number" name="kodeBarang-2" id="" placeholder="Kode Barang">
    <input type="number" name="qty-2" id="" placeholder="Quantity">
    <input type="submit">
  </form>



  <?php
  $kodeBarang_1 = $_POST["kodeBarang-1"];
  $kodeBarang_2 = $_POST["kodeBarang-2"];
  $qty_1 = $_POST["qty-1"];
  $qty_2 = $_POST["qty-2"];

  switch ($kodeBarang_1) {
    case 1:
      $barang = "Mouse Bluetooth 5.0";
      $harga = 149999;
      $diskon = 10 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = round($hargaTotal - $totalDiskon);
      break;

    case 2:
      $barang = "Headset External";
      $harga = 246000;
      $diskon = 5 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = round($hargaTotal - $totalDiskon);
      break;

    case 3:
      $barang = "Power Bank 10.000 mAh";
      $harga = 136000;
      $diskon = 0 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = round($hargaTotal - $totalDiskon);
      break;

    case 4:
      $barang = "Tripod Kamera";
      $harga = 267999;
      $diskon = 20 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = round($hargaTotal - $totalDiskon);
      break;

    case 5:
      $barang = "Smart Watch Xiaomi";
      $harga = 899000;
      $diskon = 10 / 100;
      $hargaTotal = $harga * $qty_1;
      $totalDiskon = $hargaTotal * $diskon;
      $hargaAkhir = round($hargaTotal - $totalDiskon);
      break;
    default:
      echo "kamu meng-input kode barang yang tidak tersedia";


  }

  switch ($kodeBarang_2) {
    case 1:
      $barang_2 = "Mouse Bluetooth 5.0";
      $harga_2 = 149999;
      $diskon_2 = 10 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = round($hargaTotal_2 - $totalDiskon_2);
      break;

    case 2:
      $barang_2 = "Headset External";
      $harga_2 = 246000;
      $diskon_2 = 5 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = round($hargaTotal_2 - $totalDiskon_2);
      break;

    case 3:
      $barang_2 = "Power Bank 10.000 mAh";
      $harga_2 = 136000;
      $diskon_2 = 0 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = round($hargaTotal_2 - $totalDiskon_2);
      break;

    case 4:
      $barang_2 = "Tripod Kamera";
      $harga_2 = 267999;
      $diskon_2 = 20 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = round($hargaTotal_2 - $totalDiskon_2);
      break;

    case 5:
      $barang_2 = "Smart Watch Xiaomi";
      $harga_2 = 899000;
      $diskon_2 = 10 / 100;
      $hargaTotal_2 = $harga_2 * $qty_2;
      $totalDiskon_2 = $hargaTotal_2 * $diskon_2;
      $hargaAkhir_2 = round($hargaTotal_2 - $totalDiskon_2);
      break;
    default:
      echo "kamu meng-input kode barang yang tidak tersedia";


  }

  $total = $hargaAkhir + $hargaAkhir_2;

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
    <td>$harga</td>
    <td>$qty_1</td>
    <td>$diskon</td>
    <td>$hargaAkhir</td>
  </tr>
  <tr>
    <td>2</td>
    <td>$barang_2</td>
    <td>$harga_2</td>
    <td>$qty_2</td>
    <td>$diskon_2</td>
    <td>$hargaAkhir_2</td>
    </tr>
</table> <br><br>
  ";

  echo "Total Bayar : $total";

  ?>
</body>

</html>