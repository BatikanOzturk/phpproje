<?php
  include('./connect.php');

  $query = $db -> query ('SELECT * FROM notlar ORDER BY id DESC');
  $notlar = $query->fetchAll();

  foreach ($notlar as $not) {

    $not_adi = $not['not_adi'];
    $id=$not['id'];

    echo '<a href="update.php?id=' . $id . '">' . $not_adi . '</a>' . '<br>';
    echo '<a href="delete.php?id=' . $id . '">sil</a><br><br><br>';
  }
 ?>
