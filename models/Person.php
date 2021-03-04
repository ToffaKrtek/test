<?php
  class Person
  {
    public static function getById(int $id)
    {
      if ($id)
      {
        $db = DB::getConnect();
        $result = $db->query('SELECT * FROM person WHERE person_id=' . $id);

        return $result->fetch();
      }
    }

    public static function getList()
    {
      //Мб, перекинуть в отдельный файл или хотябы ключи с ключами..
      // $host = 'localhost';
      // $dbname = 'test';
      // $user = 'test';
      // $password = 'password';
      //
      // $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
      $db = DB::getConnect();
      $personsList = array();

      $result = $db->query('SELECT person_id, name, sname, pname, byear, sex FROM person');
      //echo $result->rowCount();

      $personsList = $result->fetchAll();
      return $personsList;
    }
  }
 ?>
