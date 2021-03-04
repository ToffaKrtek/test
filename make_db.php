<?php
  //  Для использования Отключить в .htaccess  редирект! (или написать исключение)
  //CREATE DATABASE test DEFAULT CHARACTER SET utf8 DEFAULT COLLATE utf8_general_ci;
  $host = 'localhost';
  $dbname = 'test';
  $user = 'test';
  $password = 'password';


  $sql = "CREATE TABLE IF NOT EXISTS person( ".
       "person_id INT NOT NULL AUTO_INCREMENT, ".
       "name VARCHAR(100) NOT NULL, ".
       "sname VARCHAR(40) NOT NULL, ".
       "pname VARCHAR(40) NOT NULL, ".
       "byear DATE, ".
       "sex BOOL NOT NULL, ".
       "PRIMARY KEY ( person_id )); ";

try {
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $db->exec($sql);
  echo "Таблица Person создана";

// Мб, переписать чтобы одним запросом
  $sql = "CREATE TABLE IF NOT EXISTS worker_exp( ".
         "person_id INT NOT NULL, ".
         "company_name VARCHAR(100) NOT NULL, ".
         "date_start DATE NOT NULL, ".
         "date_end DATE default NULL, ".
         "PRIMARY KEY ( person_id )); ";
  $db = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
  $db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
  $db->exec($sql);
  echo "Таблица Worker_Exp создана";
  } catch(PDOException $e) {
  echo $e->getMessage();//Remove or change message in production code
}

?>
