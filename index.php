<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelipatan Lima</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="style1.css" />
  <script src="js.js"></script>
</head>
<body>
<header>
        <?php 
       include "loading.php";
        ?>
    </header>
  <div class="m1">
    <div class="form-value">
      <form action="index.php" method="post" class="form-container">
        <h2 class="text">Kelipatan Lima</h2>
        <div class="inputbox">
          <ion-icon name="mail-outline"></ion-icon>
          <input type="number" name="nilai" id="nilai" required>
          <label for="">Nilai</label>
        </div>
        <input class="submit" type="submit"></input><br>
      </form>

      <div class="m2">
        <?php
        if (isset($_POST['nilai'])) {
          $batas = $_POST['nilai'];
          $kelipatan = 5;
          $nomorKelipatan = 1;

          echo "<h2 id='judul'>Kelipatan 5 sampai $batas:</h2>";
          echo "<ol>";
          for ($i = $kelipatan; $i <= $batas; $i += $kelipatan) {
            echo "<li>Kelipatan ke-$nomorKelipatan : $i</li>";
            $nomorKelipatan++;
          }
          echo "</ol>";
        }
        ?>
      </div>
    </div>
  </div>
</body>
</html>
