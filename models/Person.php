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

    public static function add( string $name, string $sname, string $pname, string $byear, bool $sex)
    {
      $db = DB::getConnect();
      $sql = 'INSERT INTO person (name, sname, pname, byear, sex) VALUES (:name, :sname, :pname, :byear, :sex)';
      $result =   $db->prepare($sql);
      $result->bindParam(':name', $name, PDO::PARAM_STR);
      $result->bindParam(':sname', $sname, PDO::PARAM_STR);
      $result->bindParam(':pname', $pname, PDO::PARAM_STR);
      $result->bindParam(':byear', $byear, PDO::PARAM_STR);
      $result->bindParam(':sex', $sex, PDO::PARAM_BOOL);
      return $result->execute();
    }

    public static function update(int $id, string $name, string $sname, string $pname, string $byear, bool $sex)
    {
      $db = DB::getConnect();
      $sql = 'UPDATE person SET name=?, sname=?, pname=?, byear=?, sex=? WHERE person_id=?';
      $result =   $db->prepare($sql);

      return $result->execute([$name, $sname, $pname, $byear, $sex, $id]);
    }

    public static function delete(int $id)
    {
      $db = DB::getConnect();
      $sql = 'DELETE FROM person WHERE person_id= :id';
      $result =   $db->prepare($sql);
      $result->bindParam(':id', $id, PDO::PARAM_INT);
      return $result->execute();
    }
  }
 ?>
