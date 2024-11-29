<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

  $title = htmlspecialchars($_POST["title"]);
  $desc = htmlspecialchars($_POST["description"]);

  if(empty($title) || empty($desc))
  {
    echo "Nie wolno zostawiac pustego miejsca";
    die();
  }

  else if($_FILES["file"]["error"] != 0)
  {
    echo "Blad:" . $_FILES["file"]["error"];
    die(); 
  }

  $allowedTypes = ["image/png", "image/jpg", "image/jpeg", "image/gif"];

  if(!in_array($_FILES["file"]["type"], $allowedTypes))
  {
    echo "Zly format pliku";
    die();
  }
  
  $dir = "../uploads/";
  $fileName = basename($_FILES["file"]["name"]);
  $fileTarget = $dir . $fileName;

  if(file_exists($fileTarget))
  {
    echo "Plik juz istnieje";
    die();
  }
  else if(!move_uploaded_file($_FILES["file"]["tmp_name"], $fileTarget))
  {
    echo "Wystapil blad";
    die();
  }

  try
  {
    require "../model/database/dbh.inc.php";
    
    $query = "INSERT INTO wspomnienia(tytul, opis, imagePath) VALUES(:title, :descr, :imagePath);";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":descr", $desc);
    $stmt->bindParam(":imagePath", $fileTarget);
    $stmt->execute();

    $stmt = null;
    $pdo = null;

    header("Location:../view/php/dodaj_wspomnienie.php");
    die();

  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  }
}
?>
