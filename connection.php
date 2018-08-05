<?php
   error_reporting(0);
  define('DB_SERVER', "127.0.0.1");
  define('DB_USERNAME', "root");
  define('DB_PASSWORD', "siddhu");
  define('DB_DATABASE', "website");

  $db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
?>