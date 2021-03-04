<?php
  include_once ROOT. '/models/Person.php';
  class FormController
  {

    public function actionAdd()
    {
      $name ='';
      $sname = '';
      $pname = '';
      $byear = date("Y-m-d");
      $sex = false;
      $result = false;

      if (isset($_POST['submit']))
      {
        $name = $_POST['name'];
        $sname = $_POST['sname'];
        $pname = $_POST['pname'];
        $byear = $_POST['byear'];
        $sex = $_POST['sex'];

        $result = Person::add($name, $sname, $pname, $byear, $sex);
      }

      require_once(ROOT.'/views/form.php');
      return true;
    }
    public function actionUpdate(int $id)
    {
      $personInfo = Person::getById($id);
      $person_id = $personInfo['person_id'];
      $name = $personInfo['name'];
      $sname =  $personInfo['sname'];
      $pname =  $personInfo['pname'];
      $byear =  $personInfo['byear'];
      $sex =  $personInfo['sex'];
      $result = true;

      if (isset($_POST['submit']))
      {
        $name = $_POST['name'];
        $sname = $_POST['sname'];
        $pname = $_POST['pname'];
        $byear = $_POST['byear'];
        $sex = $_POST['sex'];

        $result = Person::update($person_id, $name, $sname, $pname, $byear, $sex);
      }

      require_once(ROOT.'/views/form.php');
      return true;
    }
    public function actionDelete(int $id)
    {
      $result = Person::delete($id);
      return true;
    }
  }
  ?>
