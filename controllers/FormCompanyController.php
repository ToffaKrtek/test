<?php
  include_once ROOT. '/models/Person.php';
  include_once ROOT. '/models/Expirience.php';
  class FormCompanyController
  {
    public function actionAdd(int $id)
    {
      $personInfo = Person::getById($id);
      $person_id = $id;
      $company_name = '';
      $date_start = date("Y-m-d");
      $date_end = date("Y-m-d");
      $result = false;

      if (isset($_POST['submit']))
      {
        $company_name = $_POST['company_name'];
        $date_start = $_POST['date_start'];
        $date_end = $_POST['date_end'];

        $result = Expirience::add($person_id, $company_name, $date_start, $date_end);
      }

      require_once(ROOT.'/views/formCompany.php');
      return true;
    }

    public function actionUpdate(int $company_id)
    {
      $companyInfo = Expirience::getById($company_id);
      $company_name = $companyInfo['company_name'];
      $date_start =  $companyInfo['date_start'];
      $date_end =  $companyInfo['date_end'];
      $result = true;

      if (isset($_POST['submit']))
      {
        $company_name = $_POST['company_name'];
        $date_start = $_POST['date_start'];
        $date_end = $_POST['date_end'];

        $result = Expirience::update($company_id, $company_name, $date_start, $date_end);
      }
      require_once(ROOT.'/views/formCompany.php');
      return true;
    }
    public function actionDelete(int $company_id)
    {
      $result = Expirience::delete($company_id);
      return true;
    }
  }
?>
