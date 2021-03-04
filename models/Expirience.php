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

      // Можно через один запрос -> тогда переделать контроллер
      // SELECT person.person_id, person.name, person.sname, person.pname, person.byear, person.sex, worker_expirience.company_name, worker_expirience.date_start, worker_expirience.date_end
      //FROM person JOIN worker_expirience ON person.person_id = worker_expirience.person_id WHERE person_id='. $person_id

      $resultCompanies = $db->query('SELECT * FROM worker_expirience WHERE person_id='. $person_id);
      //echo $result->rowCount();

      $companyList = $resultCompanies->fetchAll();
      return $companyList;
    }
  }
 ?>
