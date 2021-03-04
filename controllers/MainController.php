<?php
  class MainController
  {
    public function actionList()
    {
      echo 'fff';
      return true;
    }
    public function actionItem( int $id)
    {
      echo $id;
      return true;
    }
  }
 ?>
