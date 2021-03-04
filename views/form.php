<div class="container">
  <h1>Добавить сотрудника</h1>
  <form action="#" method="post">
  <div class="form-group">
    <small class="form-text text-muted">Введите имя сотрудника</small>
   <input type="text" class="form-control"  id="name"  name="name"  placeholder="Имя" value="<?=$name?>">

 </div>
 <div class="form-group">
   <small  class="form-text text-muted">Введите фамилию сотрудника</small>
  <input type="text" class="form-control" id="sname" name="sname" placeholder="Фамилия" value="<?=$sname?>">

</div>
<div class="form-group">
   <small  class="form-text text-muted">Введите отчество сотрудника.</small>
 <input type="text" class="form-control" id="pname" name="pname" placeholder="Отчество" value="<?=$pname?>">

</div>
<div class="form-group">
  <small  class="form-text text-muted">Введите дату рождения сотрудника</small>
 <input type="date" class="form-control" id="byear" name="byear"  placeholder="Дата рождения" value="<?=$byear?>">
</div>
<div class="form-group">
    <label for="sex"  class="form-text text-muted">Пол сотрудника</label>
    <select class="form-control" id="sex" name="sex" value="<?=$sex?>">
      <option value="true">Мужской</option>
      <option value="false">Женский</option>
    </select>
<br>
<div class="form-group">
 <button type="submit" name="submit" class="btn btn-primary">Сохранить</button>
</form>
<?php if ($result): ?>
  <button type="button" class="btn  btn-outline-success" onClick="window.location.href='/form-company/add/<?=$person_id?>';">+Добавить место работы</button>
<?php endif; ?>
</div>
