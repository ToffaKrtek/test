
  <div class="container">
    <h1>Список сотрудников</h1>
    <table class="table t table-hover">
    <thead>
      <tr>
        <th>Имя</th>    
        <th>Отчество</th>
        <th>Фамилия</th>
        <th>Дата рождения</th>
          <th>Пол</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($personsList as $person): ?>
      <tr onClick="window.location.href='item/<?=$person['person_id']?>';">
        <td><?=$person['name']?></td>
        <td><?=$person['pname']?></td>
        <td><?=$person['sname']?></td>
        <td><?=$person['byear']?></td>
        <td>
            <?php if ($person['sex']):?>
              Мужской
            <?php else: ?>
              Женский
            <?php endif;?>
        </td>
      </tr>
    <?php endforeach; ?>
    </tbody>
  </table>
  </div>
