<?php


if($_SERVER["REQUEST_METHOD"] == "POST")
{
  $id = $_POST["image-id"];
  try
  {
    require "../model/database/dbh.inc.php";

    $query = "SELECT imagePath FROM wspomnienia WHERE id = :id;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    $imagePath = $result["imagePath"];

    if(file_exists($imagePath))
    {
      unlink($imagePath);
    }



    $query = "DELETE FROM wspomnienia WHERE id = :id;";
    $stmt = $pdo->prepare($query);

    $stmt->bindParam(":id", $id);
    $stmt->execute();

    $stmt = null;
    $pdo = null;



    header("Location: ../view/php/lista_wspomnien.php");
    die();

  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  }
}