<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css-files/Tugas2.css">
  <title>Document</title>
</head>

<body>
  <h1>Atribut colspan dan rowspan</h1>
  <!-- Membuat table dengan border, dan memberikan class nya -->
  <table border="1" class="table__1">
    <tr>
      <th>Baris 1, Kolom 1</th>
      <th>Baris 1, Kolom 2</th>
      <th>Baris 1, Kolom 3</th>
    </tr>

    <tr>
      <th>Baris 2, Kolom 1</th>
      <!-- memberi atribut colspan biar kolom nya di merge -->
      <th colspan="2">Baris 2, Kolom 2&3</th>
    </tr>

    <tr>
      <th>Baris 3, Kolom 1</th>
      <th>Baris 3, Kolom 2</th>
      <th>Baris 3, Kolom 3</th>
    </tr>
  </table>
  </div>

  <h2>Atribut colspan dan rowspan</h2>
  <table border="1" class="table__2">
    <tr>
      <th>Baris 1, Kolom 1</th>
      <th>Baris 1, Kolom 2</th>
      <th>Baris 1, Kolom 3</th>
    </tr>

    <tr>
      <th>Baris 2, Kolom 1</th>
      <th colspan="2">Baris 2, Kolom 2&3</th>
    </tr>

    <tr>
      <th>Baris 3, Kolom 1</th>
      <th>Baris 3, Kolom 2</th>
      <th>Baris 3, Kolom 3</th>
    </tr>
  </table>
  </div>

  <h3>Atribut colspan dan rowspan</h3>
  <table border="1" class="table__3">
    <tr>
      <th>Baris 1, Kolom 1</th>
      <th colspan="2">Baris 1, Kolom 2</th>
    </tr>

    <tr>
      <!-- memberikan atribut rowsapn agar baris 1 dan 2 nya menyatu -->
      <th rowspan="2">Baris 2, Kolom 1</th>
      <th>Baris 2, Kolom 2</th>
      <th>Baris 2, Kolom 3</th>
    </tr>

    <tr>
      <th>Baris 3, Kolom 2</th>
      <th>Baris 3, Kolom 3</th>
    </tr>
  </table>
  </div>
</body>

</html>