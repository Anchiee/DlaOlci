<?php
  require "../../model/database/dbReadData.inc.php";

  $result = returnWspomnieniaData();

  if(empty($result)) {
    echo "Nie ma zadnych wspomnien";
    die();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/lista_wspomnien.css">
  <title>Lista wspomnien</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Delius&family=Funnel+Display:wght@300..800&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Lexend:wght@100..900&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rouge+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="../../model/assets/heart.png">
</head>
<body>

  <div class="nav">
    <a href="./komplementy.php" class="links">Komplementy</a>
    <a href="../../model/database/dbCheck.inc.php" class="links">Formularz</a>
    <a href="../../controller/RedirectController.php" class="links" id="chosen-option">Wspomnienia</a>
  </div>  

  <div class="topnav">
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
      <a href="./komplementy.php">Komplementy</a>
      <a href="./formularz.php">Formularz</a>
      <a href="../../controller/RedirectController.php">Wspomnienia</a>
    </div>
    
    <div class="hamburger-menu">
      <a href="javascript:void(0);" class="icon" onclick="navMenu()">
        <i class="fa-solid fa-bars fa-2xl"></i>
      </a>
    </div>
    
  </div>
  

  <div class="wspomnienia">
    <?php

      if(!isset($result))
      {
        echo "Nie ma zadnych wspomnien";
        die();
      }
      foreach($result as $column)
      {
        echo "<form action='../../controller/DeleteMemoryFormHandler.php' method='post'>";

        
        echo "<h1 class='memory-header'>" . $column["Tytul"] . "</h1>";

        echo "<p class='memory-description'>" . $column["Opis"] . "</p>";

        
        echo "<p class='memory-date'>" . $column["Czas"] . "</p>";

        echo "<img src='" . "../" . $column["imagePath"] . "'" . "alt='wspomnienie' width=320 class='memory-image'>";

        echo "<input type='hidden' name='image-id' value='" . $column["id"] . "'>"; 
        echo "<button class='delete-button'><i class='fa-regular fa-trash-can' class='icon'></i></button>";
        echo "</form>";
      }
    ?>
  </div>



<script src="../js/navigation.js" defer></script>
</body>
</html>