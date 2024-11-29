<?php

$dbuser = getenv("DlaOlciUsername");
$dbpass = getenv("DlaOlciPass");
$dbName = getenv("DlaOlciDBName");
$host = getenv("DlaOlciHost");


$dsn = "mysql:host=$host;dbname=$dbName";


try {
  $pdo = new PDO($dsn, $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed:" . $e->getMessage();
}