<table>
  <thead>
    <tr>
      <td>アイテム</td>
      <td>最終注文日</td>
      <td>次回注文予定日</td>
    </tr>
  </thead>
  <tbody>
<?php foreach ($results as $key => $value): ?>
  <tr>
    <th>
    <?= $value['name']; ?>
    </th>
    <td>
      <?= empty($value['orders'][0]['date']) ? '' : $this->Time->format($value['orders'][0]['date'], 'Y-M-d'); ?>
    </td>
    <td>
      <?= empty($value['orders'][0]['date']) ? '' : $this->Time->format($value['orders'][0]['date'], 'Y-M-d'); ?>
    </td>
  </tr>
<?php endforeach; ?>
  </tbody>
</table>
