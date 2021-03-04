<!doctype html>

<html lang="ru">
<head>
  <meta charset="utf-8">

  <title>Список сотрудников</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
  <!-- <link rel="stylesheet" href="css/styles.css?v=1.0"> -->

  <!--[if lt IE 9]>
    <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Список</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="/form">Добавить сотрудника</a>
      </ul>
    </div>
  </div>
</nav>
  <div class="conrainer">
    <h1><?=$personInfo['name']?> <?=$personInfo['pname']?> <?=$personInfo['sname']?></h1>
    <h3><?=$personInfo['byear']?> | <?php if ($personInfo['sex']):?>
        Мужской
      <?php else: ?>
        Женский
      <?php endif;?></h3>
  </th>
      <th>
      </th>
    </tr>
    <table class="table table-hover">
    <thead>
      <tr>
        <th>Название компании</th>
        <th>Дата начала работы</th>
        <th>Дата окончания работы</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($companyList as $company): ?>
      <tr onClick="window.location.href='item/<?=$person['person_id']?>';">
        <td><?=$company['company_name']?></td>
        <td><?=$company['date_start']?></td>
        <td>
            <?php if ($company['date_end'] != null):?>
              <?=$company['date_end']?>
            <?php else: ?>
              По текущее время
            <?php endif;?>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>