<?php
  class Expirience
  {
    public static function getById(int $company_id)
    {
      if ($company_id)
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

    public static function add( int $person_id, string $company_name, string $date_start, string $date_end)
    {
      $db = DB::getConnect();
      $sql = 'INSERT INTO worker_expirience (person_id, company_name, date_start, date_end) VALUES (:person_id, :company_name, :date_start, :date_end)';
      $result =   $db->prepare($sql);
      $result->bindParam(':person_id', $person_id, PDO::PARAM_INT);
      $result->bindParam(':company_name', $company_name, PDO::PARAM_STR);
      $result->bindParam(':date_start', $date_start, PDO::PARAM_STR);
      $result->bindParam(':date_end', $date_end, PDO::PARAM_STR);
      return $result->execute();
    }
    public static function update(int $company_id, string $company_name, string $date_start, string $date_end)
    {
      $db = DB::getConnect();
      $sql = 'UPDATE worker_expirience SET company_name=?, date_start=?, date_end=? WHERE company_id=?';
      $result =   $db->prepare($sql);

      return $result->execute([$company_name, $date_start, $date_end, $company_id]);
    }

    public static function delete(int $company_id)
    {
      $db = DB::getConnect();
      $sql = 'DELETE FROM worker_expirience WHERE company_id= :company_id';
      $result =   $db->prepare($sql);
      $result->bindParam(':company_id', $company_id, PDO::PARAM_INT);
      return $result->execute();
    }
  }
 ?>
