<?php

require_once "./dbh.inc.php";

try {

  $query = "SELECT * FROM formularz;";
  $stmt = $pdo->prepare($query);

  $stmt->execute();

  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if(empty($result))
  {
    header("Location: ../../view/php/formularz.php");
    die();
  }
  else
  {
    header("Location: ../../view/php/pokaz.php");
    die();
  }

} catch(PDOException $e) {
  echo "Query failed:" . $e->getMessage();
}


