<?php
  function toRoman($num) {
  $integer = [ 1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1 ];
  $romawi = [ 'M', 'CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I' ];

  $result = '';

  for ($i = 0; $i < count($integer); $i++) {
    while ($integer[$i] <= $num) {
      $result .= $romawi[$i];
      $num -= $integer[$i];
    }
  }
  return $result;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Pertemuan 6</title>
</head>
<body>
    <style>
          body {
              color: white;
              margin: 0;
              background: linear-gradient(to right, #2F0743, #41295a);
          }
          .container {
            width: 900px;
            padding: 40px 90px 60px;
            margin: 250px 0;
            align-items: center;
            background: linear-gradient(to right, #667db6, #0082c8, #0082c8, #667db6);
            border-radius: 100px;
          }
          form {
              max-width: 200px;
          }
          #btn{
              height: 40px;
              border-radius: 10px;
              background-color: black;
              color: white;
              margin-top: 20px;
          }
          #btn:hover {
            background-color: white;
            color: black;
          }
          label{
            text-transform: uppercase;
            font-weight: bold;
          }
    </style>
    <center>
      <div class="container">
      <h1 style="margin-bottom: 20px;">Alfian Kafilah Ba'its - 120140109 - Praktikum Pertemuan 6</h1>
      <form method="get">
        <label id= "title" for="romawi">Input angka yang ingin diubah ke bilangan romawi!</label>
        <input type="number" name="romawi">
        <button id="btn" type="submit">SUBMIT</button>
      </form>
    <div class="hasil">
      <h2>Hasil Angka Romawi:</h2>
      <?php 
        if (isset($_GET['romawi'])){
          $result = $_GET['romawi'];
          echo "<h1>" . toRoman($result) ."</h1>";
        }
      ?>
    </div>
  </div>
    </center>
</body>
</html>