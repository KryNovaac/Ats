<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kelipatan Lima</title>
  <link rel="stylesheet" href="style.css" />
  <style>
    body {
      background: cyan;
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh; 
      background: linear-gradient(90deg, rgb(135, 150, 255), rgb(206, 150, 255) 100%)
    }

    .m1 {
        justify-content: center; 
      color: white;
      margin: 0 auto; 
      width: 400px; 
      padding: 20px;
      border-radius: 20px; 
      background-color: rgba(0, 0, 0, 0.7); 
      margin:auto;
      padding:auto;
    }

    .text {
      font-size: 2em;
      color: #fff;
      text-align: center;
    }

    #judul{
        text-align: center;
        
    }

    .inputbox {
      position: relative;
      margin: 70px auto;
      width: 310px;
      border-bottom: 2px solid #fff;
    }

    .inputbox label {
      position: absolute;
      top: 50%;
      left: 5px;
      transform: translate(-50%);
      color: #fff;
      font-size: 1em;
      pointer-events: none;
      transition: 2.5s;
      
    }


@keyframes fadein {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

    input:focus ~ label,
    input:valid ~ label {
      top: -5px;
    }

    .inputbox input {
      width: 100%;
      height: 50px;
      background: transparent;
      border: none;
      outline: none;
      font: 1em;
      padding: 0 35px 0 5px;
      color: #fff;
    }

    .m2 {
      margin-top: 20px; 
    }
    .submit{
        margin-left:170px;
        border-radius: 20px; 
        border:transparent;
        color:white;
        margin-top:-20px;
    }

    .m2{
        transition: 2.5s;
        background-color:white;
        color:black;
        border-radius:30px;
        animation: fadein 2s ease-in-out;
        margin:auto;
        padding:auto;
    }
  </style>
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
  <script src="js.js"></script>
</body>
</html>
