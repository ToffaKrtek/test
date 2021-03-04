
  <div class="container">
    <h1><?=$personInfo['name']?> <?=$personInfo['pname']?> <?=$personInfo['sname']?></h1>
    <h3><?=$personInfo['byear']?> | <?php if ($personInfo['sex']):?>
        Мужской
      <?php else: ?>
        Женский
      <?php endif;?></h3>
      <hr>
        <button type="button" class="btn btn-warning" onClick="window.location.href='/form/update/<?=$personInfo['person_id']?>';" >Изменить Персональные Данные</button>
        <button type="button" class="btn btn-danger" onClick="window.location.href='/form/delete/<?=$personInfo['person_id']?>';">Удалить Сотрудника</button>
            <hr>
  </th>
      <th>
      </th>
    </tr>
    <table class="table">
    <thead>
      <tr>
        <th>Название компании</th>
        <th>Дата начала работы</th>
        <th>Дата окончания работы</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($companyList as $company): ?>
      <tr>
        <td><?=$company['company_name']?></td>
        <td><?=$company['date_start']?></td>
        <td>
            <?php if ($company['date_end'] != null):?>
              <?=$company['date_end']?>
            <?php else: ?>
              По текущее время
            <?php endif;?>
        </td>
        <td >
          <button type="button" class="btn  btn-outline-success"  onClick="window.location.href='/form-company/update/<?=$company['company_id']?>';">Изменить</button>
          <button type="button" class="btn  btn-outline-danger" onClick="window.location.href='/form-company/delete/<?=$company['company_id']?>';">Удалить</button>
        </td>
      </tr>
    <?php endforeach; ?>
    <tr>
      <button type="button" class="btn  btn-outline-success" onClick="window.location.href='/form-company/add/<?=$personInfo['person_id']?>';">+Добавить место работы</button>
    </tr>
    </tbody>
  </table>
  </div>
