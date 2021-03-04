<?php

  include_once ROOT. '/models/Person.php';
  include_once ROOT. '/models/Expirience.php';

  class MainController
  {
    public function actionList()
    {
      $personsList = array();
      $personsList = Person::getList();

      require_once(ROOT.'/views/index.php');
      return true;
    }
    public function actionItem( int $id)
    {
      $personInfo = Person::getById($id);
      $companyList = Expirience::getList($id);
      require_once(ROOT.'/views/item.php');
      return true;
    }
  }
 ?>
