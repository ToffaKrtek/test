<?php
  class Person
  {
    public static function getById(int $id)
    {

    }

    public static function getList()
    {
      //Мб, перекинуть в отдельный файл с ключами..
      $host = 'localhost';
      $dbname = 'test';
      $user = 'test';
      $password = 'password';

      $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      return true;
    }
  }
 ?>
