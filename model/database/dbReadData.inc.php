<?php

function returnFormularzData()
{
  try {
    require_once "dbh.inc.php";

    $query = "SELECT * FROM formularz;";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
  
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = null;
    $pdo = null;


    return $result;
  
  } catch(PDOException $e) {
    echo "Query failed:" . $e->getMessage();
    die();
  }
}


function returnWspomnieniaData()
{
  try
  {

    require "dbh.inc.php";

    $query = "SELECT * FROM wspomnienia;";
    $stmt = $pdo->prepare($query);

    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $stmt = null;
    $pdo = null;

    return $result;

  } catch(PDOException $e) {
    echo "Query failed:" . $e;
    return "";
  }
}