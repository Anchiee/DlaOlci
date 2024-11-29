<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $email = $_POST["email"];

  try{
    require "../model/database/dbh.inc.php";
    require_once "./SendEmailController.inc.php";

    $query = "INSERT INTO formularz(email) VALUES(:email);";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":email", $email);
    $stmt->execute();

    $stmt = null;
    $pdo = null;

    sendEmail($email);
    header("Location: ../view/php/pokaz.php");
    die();
  } catch(PDOException $e) {
    echo "Query failed" . $e->getMessage();
  }
}
else
{
  header("Location: Olcia/view/php/formularz.php");
  die();
}


