<?php

include('./connect.php');

//---VERİ ÇEKME

  $id = $_GET['id'];

  $query1 = $db->prepare('SELECT * FROM notlar WHERE id = ?');
  $query1->execute(array($id));
  $row = $query1->fetch();

  $not_adi = $row ['not_adi'];

  // ----- VERİ GÜNCELEME

  if ($_POST) {
    $not_adi = $_POST['not_adi'];

    echo $not_adi . ' ';

    $query = $db->prepare('UPDATE notlar SET
      not_adi = ?
      WHERE id = ?
    ');
    $query->execute(array($not_adi, $id));
  }


?>

<h2>Güncelle</h2>
  <form class="" action="" method="POST" style="padding:350px">
    <label for="">Notlar : </label>
    <input type="text" name="not_adi" value="<?=$not_adi?>">
    <br>
    <input type="submit" value="Ekle">

  </form>
