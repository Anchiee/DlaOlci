<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Login</title>
  <link rel="stylesheet" href="../styles/login.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">

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
    <a href="#" class="links" id="chosen-option">Wspomnienia</a>
  </div>


  <div class="topnav">
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
      <a href="./komplementy">Komplementy</a>
      <a href="../../model/database/dbCheck.inc.php">Formularz</a>
      <a href="#" id="chosen-option-mobile">Wspomnienia</a>
    </div>
    
    <div class="hamburger-menu">
      <a href="javascript:void(0);" class="icon" onclick="navMenu()">
        <i class="fa-solid fa-bars fa-2xl"></i>
      </a>
    </div>
    
  </div>


  <form action="../../controller/LoginFormHandler.php" method="post">
    <h1>Zaloguj sie</h1>
    <input type="password" placeholder="Haslo" name="password">
    <button>
      Zaloguj sie
      <i class="fa-solid fa-right-to-bracket" class="icon"></i>
    </button type="submit">
  </form>

<script src="../js/navigation.js" defer></script>
</body>
</html>