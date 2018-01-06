<?php

// session_start(); // Bu sayfada oturumu açacağım

include('./connect.php');


if ($_POST) {

  $not_adi = $_POST['not_adi'];
  $not_id = $_POST['not_id'];

  echo $not_adi;

  $query = $db->prepare("INSERT INTO notlar SET
    not_id = :id,
    not_adi = :ad
    ");

  $query->execute(array('id' => $not_id, 'ad' => $not_adi));

}



?>


<form class="" action="" method="POST" style="">

  <label for="">Notlar :</label>
  <input type="text" name="not_adi" value="" style=" padding-bottom:45px; padding-right:700px;">


  <br><label for="">Not ID:</label>
  <input type="text" name="not_id" value=""> <br><br>
  <input type="submit" value="Kaydet">

</form>
