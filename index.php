<?php
  // DEBUG
  ini_set('display_errors', 1);
  error_reporting(E_ALL);
  // Файлы системы
  define('ROOT', dirname(__FILE__));
  require_once(ROOT. '/components/Router.php');
  require_once(ROOT. '/components/DB.php');

  // Соединение с БД

  // Роутер
  include_once(ROOT.'/views/header.php');
  $router = new Router();
  $router->run();
  include_once(ROOT.'/views/footer.php');
