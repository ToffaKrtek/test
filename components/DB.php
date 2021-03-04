<?php
  class DB
  {
    public static function getConnect()
    {
      $host = 'localhost';
      $dbname = 'test';
      $user = 'test';
      $password = 'password';

      $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password,[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
      return $db;
    }
  }

 ?>
