<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Pokaz</title>
  <link rel="icon" href="../../model/assets/heart.png">
  <link rel="stylesheet" href="../styles/pokaz.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Delius&family=Funnel+Display:wght@300..800&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Lexend:wght@100..900&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rouge+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>  
<body>

  <div class="nav">
    <a href="./komplementy.php" class="links">Komplementy</a>
    <a href="../../model/database/dbCheck.inc.php" class="links" id="chosen-option">Formularz</a>
    <a href="../../controller/RedirectController.php" class="links">Wspomnienia</a>
  </div>

  <div class="topnav">
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
      <a href="./komplementy">Komplementy</a>
      <a href="./formularz.php" id="chosen-option-mobile">Formularz</a>
      <a href="./wspomnienia.php">Wspomnienia</a>
    </div>
    
    <div class="hamburger-menu">
      <a href="javascript:void(0);" class="icon" onclick="navMenu()">
        <i class="fa-solid fa-bars fa-2xl"></i>
      </a>
    </div>
    
  </div>

  <div class="info-div">
    <h1>Informacje</h1>
    <?php
      require "../../model/database/dbReadData.inc.php";
      $result = returnFormularzData();

      $months = ["Styczeń", "Luty", "Marzec", "Kwiecień", "Maj", "Czerwiec", "Lipiec", "Sierpień", "Wrzesień", "Październik", 
      "Listopad", "Grudzień"];

      $submitDate = $result[0]["submit_date"];

      $SubmitDateClass = new DateTime($submitDate);

      $SubmitDateClass->modify("+10 hours");
      $SubmitDateClass->modify("+8 minutes");

      $CurrentTimeClass = new DateTime();

      $interval = $CurrentTimeClass->diff($SubmitDateClass);


      $month = date("n", strtotime($submitDate)) - 1; 
      $day = date("j", strtotime($submitDate));
      $year = date("Y", strtotime($submitDate));

      echo "<p class='info'><span>Poczatek zwiazku:</span>" . $day . " " . $months[$month] . " " . $year . "r." . "</p>";
      echo "<p class='info'><span>Jestesmy juz razem:</span>" . $interval->d . "dni" . " " . $interval->m . "miesiecy" . " " . $interval->y . "lat" . " " . $interval->h . "godzin" . 
        " " . $interval->i . "minut" . "</p>";
    ?>
  </div>


<script src="../js/navigation.js" defer></script>
</body>
</html>