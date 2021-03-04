<?php
  class Expirience
  {
    public static function getById(int $company_id)
    {
      if ($id)
      {
        $db = DB::getConnect();
        $result = $db->query('SELECT * FROM worker_expirience WHERE company_id=' . $company_id);

        return $result->fetch();
      }
    }

    public static function getList(int $person_id)
    {

      $db = DB::getConnect();
      $companyList = array();

      $resultCompanies = $db->query('SELECT * FROM worker_expirience WHERE person_id='. $person_id);
      //echo $result->rowCount();

      $companyList = $resultCompanies->fetchAll();
      return $companyList;
    }
  }
 ?>
