<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Komplementy</title>
  <link rel="icon" href="../../model/assets/heart.png">
  <link rel="stylesheet" href="../styles/komplementy_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Delius&family=Funnel+Display:wght@300..800&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Lexend:wght@100..900&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rouge+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="nav">
    <a href="#" class="links" id="chosen-option">Komplementy</a>
    <a href="../../model/database/dbCheck.inc.php" class="links">Formularz</a>
    <a href="../../controller/RedirectController.php" class="links">Wspomnienia</a>
  </div>


  <div class="topnav">
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
      <a href="#" id="chosen-option-mobile">Komplementy</a>
      <a href="../../model/database/dbCheck.inc.php">Formularz</a>
      <a href="../../controller/RedirectController.php">Wspomnienia</a>
    </div>
    
    <div class="hamburger-menu">
      <a href="javascript:void(0);" class="icon" onclick="navMenu()">
        <i class="fa-solid fa-bars fa-2xl"></i>
      </a>
    </div>
    
  </div>


  
  <div>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="get">
      <h1>Wylosuj komplement</h1>
      
      <?php 
        $komplementy = [
          "Twoje oczy sa piekniejsze niz najjasniejsze gwiazdy na niebie.",
          "Twoj usmiech rozjasnia nawet najciemniejsze dni.",
          "Jestes dla mnie calym swiatem  niczego wiecej mi nie potrzeba.",
          "Kazdy moment spedzony z Toba jest jak spelnienie marzen.",
          "Jestes piekna nie tylko zewnetrznie, ale i wewnetrznie.",
          "Twoje serce jest najwiekszym skarbem, jaki moglem znalezc.",
          "Gdy jestes obok, wszystko staje sie lepsze.",
          "Masz wyjatkowy talent do uszczesliwiania mnie kazdego dnia.",
          "Nie wyobrazam sobie zycia bez Ciebie  jestes moim wszystkim.",
          "Kiedy patrze na Ciebie, widze najpiekniejsza osobe na swiecie.",
          "Jestes tak przepiekna i cudowna ze inne dziewczyny stawaja sie nieatrakcyjne",
          "Twoja dusze mozna porownac do najczysciejszych krysztalow na swiecie",
          "Twoje oczy sa tak cudowne ze ogladanie fajerwerkow zamiast ich staje sie nudne"
      ];

        $randomNum = rand(1, sizeof($komplementy) - 1);

        echo "<p class='komplement'>" . $komplementy[$randomNum] . "</p>";

      ?>
      
      
      <button type="submit">
        Wylosuj
        <i class="fa-solid fa-circle-down" class="icon"></i>
      </button>

    </form>
  </div>
  
<script src="../js/navigation.js" defer></script>
</body>
</html>
