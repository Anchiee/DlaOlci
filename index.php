<!DOCTYPE html>
<html lang="pl">
<head>
  <title>Strona glowna</title>
  <link rel="stylesheet" href="./view/styles/index.css">
  <link rel="icon" href="./model/assets/heart.png">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="UTF-8">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Delius&family=Funnel+Display:wght@300..800&family=Host+Grotesk:ital,wght@0,300..800;1,300..800&family=Lexend:wght@100..900&family=Pacifico&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Rouge+Script&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

  <div class="top-header">
    <h1 class="top-h1">Witaj moja Ksiezniczko,</h1>
    <p class="top-p">poczuj sie jak w domu ❤️</p>
  </div>

  <div class="nav">
    <h1 class="nav-h1">✨Dokad moje slonce chce pojsc?✨</h1>

    <p class="option">😣Kiedy mialabys zly humor a mnie by nie bylo😣</p>
    <button class="option-button" onclick="komplementy()">
      Komplementy
      <i class="fa-solid fa-heart" class="icon"></i>
    </button>

    <p class="option">😄Jak bedziesz gotowa na to abym zostal twoim chlopakiem😄</p>
    <button class="option-button" onclick="formularz()">
      Formularz
      <i class="fa-solid fa-pen" class="icon"></i>
    </button>

    <p class="option">😍Abysmy mogli wspominac nasze piekne chwile😍</p>
    <button class="option-button" onclick="wspomnienia()">
      Wspomnienia
      <i class="fa-regular fa-sun" class="icon"></i>
    </button>
  </div>

  


<script src="./view/js/redirection.js" defer></script>
</body>
</html>

