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
      //require_once(ROOT.'/views/form.php');
      return true;
    }
    public function actionDelete(int $id)
    {
      echo "delete";
      return true;
    }
  }
  ?>
