<?php

require "../configurations/config.inc.php";

empty($_SESSION["username"]) ? header("Location: ../view/php/login.php") : header("Location: ../view/php/wspomnienia.php");
die();