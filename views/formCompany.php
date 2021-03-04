<div class="container">
  <h1>
    <?php if ($result):?>
    Изменить
  <?php else: ?>
    Добавить
  <?php endif; ?>
    опыт работы</h1>
  <form action="#" method="post">
  <div class="form-group">
    <small class="form-text text-muted">Введите название компании</small>
   <input type="text" class="form-control"  id="company_name"  name="company_name"  placeholder="Введите название компании" value="<?=$company_name?>">

   <div class="form-group">
     <small  class="form-text text-muted">Введите дату начала работы</small>
    <input type="date" class="form-control" id="date_start" name="date_start"  placeholder="Дата начала" value="<?=$date_start?>">
   </div>
  <div class="form-group">
    <small  class="form-text text-muted">Введите дату окончания работ</small>
   <input type="date" class="form-control" id="date_end" name="date_end"  placeholder="Дата рождения" value="<?=$date_end?>">
  </div>

<br>
<div class="form-group">
 <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
</form>
<?php if ($result): ?>
  <button type="button" class="btn  btn-outline-success" onClick="window.location.href='/form-company/add/<?=$companyInfo['person_id']?>';">+Добавить место работы</button>
<?php endif; ?>
</div>
