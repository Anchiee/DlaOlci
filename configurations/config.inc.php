<?php

ini_set("session.use_only_cookies", 1);
ini_set("session.use_strict_mode", 1);

session_set_cookie_params([
  "lifetime" => 900,
  "domain" => "localhost",
  "secure" => true,
  "httponly" => true,
  "path" => "/"
]);

session_start();

if(!isset($_SESSION["regeneration"]))
{
  $_SESSION["regeneration"] = time();
  session_regenerate_id(true);
}
else
{
  $interval = 60 * 15;

  if(time() - $_SESSION["regeneration"] >= $interval)
  {
    $_SESSION["regeneration"] = time();
    session_regenerate_id(true);
  }
}