<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $password = htmlspecialchars($_POST["password"]);

  try {
    
    require "../configurations/config.inc.php";
    require "../model/database/dbh.inc.php";

    $query = "SELECT haslo FROM daneolci WHERE haslo = :passwrd;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":passwrd", $password);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = null;
    $pdo = null;

    if($result)
    {
      $_SESSION["username"] = true;
      header("Location: ../view/php/wspomnienia.php");
      die();
    }
    else
    {
      echo "Zle haslo/pusta odpowiedz";
      die();
    }

  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
  }
}