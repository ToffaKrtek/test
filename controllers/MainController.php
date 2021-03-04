<?php

  include_once ROOT. '/models/Person.php';
  class MainController
  {
    public function actionList()
    {
      $personsList = array();
      $personsList = Person::getList();
      echo '<pre>';
      print_r($personsList);
      echo '</pre>';
      return true;
    }
    public function actionItem( int $id)
    {
      echo $id;
      return true;
    }
  }
 ?>
