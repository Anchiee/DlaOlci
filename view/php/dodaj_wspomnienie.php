<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dodaj wspomnienie</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles/dodaj_wspomnienie.css">
  <link rel="icon" href="../../model/assets/heart.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Delius&family=Funnel+Display:wght@300..800&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Lexend:wght@100..900&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rouge+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <div class="nav">
      <a href="./komplementy.php" class="links">Komplementy</a>
      <a href="./formularz.php" class="links">Formularz</a>
      <a href="#" class="links" id="chosen-option">Wspomnienia</a>
  </div>


  <div class="topnav">
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
      <a href="#">Komplementy</a>
      <a href="./formularz.php">Formularz</a>
      <a href="./wspomnienia.php">Wspomnienia</a>
    </div>
    
    <div class="hamburger-menu">
      <a href="javascript:void(0);" class="icon" onclick="navMenu()">
        <i class="fa-solid fa-bars fa-2xl"></i>
      </a>
    </div>
    
  </div>

  <form action="../../controller/AddMemoryFormHandler.php" method="post" enctype="multipart/form-data">
    <input type="text" class="text-input" placeholder="Nazwa wspomnienia" name="title" required>
    <textarea class="text-input" name="description" placeholder="Opis wspomnienia" required></textarea>
    
    <label for="file" class="custom-file-upload">
      Wybierz plik
      <i class="fa-solid fa-upload" class="icon"></i>
    </label>
    <input type="file" class="file-input" id="file" name="file" required onchange="imagePreview(event)">

    <button>
      Dodaj
    </button>
  </form>
  
<script src="../js/navigation.js" defer></script>
</body>
</html>