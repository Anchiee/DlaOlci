<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Formularz</title>
  <link rel="icon" href="../../model/assets/heart.png">
  <link rel="stylesheet" href="../styles/formularz_style.css">
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
      <a href="#" id="chosen-option" class="links">Formularz</a>
      <a href="../../controller/RedirectController.php" class="links">Wspomnienia</a>
  </div>

  <div class="topnav">
    <!-- Navigation links (hidden by default) -->
    <div id="myLinks">
      <a href="./komplementy.php" >Komplementy</a>
      <a href="#" id="chosen-option-mobile">Formularz</a>
      <a href="../../controller/RedirectController.php">Wspomnienia</a>
    </div>
    
    <div class="hamburger-menu">
      <a href="javascript:void(0);" class="icon" onclick="navMenu()">
        <i class="fa-solid fa-bars fa-2xl"></i>
      </a>
    </div>
    
  </div>


  <form action="../../controller/FormHandlerController.php" method="post">
    <h1>Zostan moja dziewczyna</h1>

    <input type="email" class="text-input" placeholder="Twoj email(mala niespodzianka)" name="email" required>


    <p class="question-header">Czy jestes gotowa aby zostac moja dziewczyna?</p>
    <input type="radio" class="radio-input" name="choice0" value="tak" id="tak0" required>
    <label for="tak0" class="radio-label">Tak</label>

    <p class="question-header">Czy zostawisz mnie na pastwe losu kiedy bede cie potrzebowac najbardziej?</p>
    <input type="radio" class="radio-input" name="choice1" value="nie" id="nie0" required>
    <label for="nie0" class="radio-label">Nie</label>

    <p class="question-header">Czy obiecujesz ze kazdy problem bedziesz ze mna konsultowac a nie zamykac sie w sobie?</p>
    <input type="radio" class="radio-input" name="choice2" value="tak" id="tak1">
    <label for="tak1" class="radio-label">Tak</label>

    <p class="question-header">Czy obiecujesz ze nie bedziesz myslec o sobie zle?</p>
    <input type="radio" class="radio-input" name="choice3" value="tak" id="tak2">
    <label for="tak2" class="radio-label">Tak</label>

    <p class="disclaimer">&#42; Uwaga po nacisnieciu przycisku czynnosc nie moze zostac cofnieta</p>
    <button type="submit">
      Potwierdz
      <i class="fa-solid fa-check" class="icon"></i>
    </button>

  </form>

<script src="../js/navigation.js" defer></script>
</body>

</html>