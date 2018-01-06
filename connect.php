<?php

$db_host = 'localhost';
$db_name = 'notlar';
$db_user = 'root';
$db_pass = '';


try {

  $db = new PDO("mysql:host=$db_host;dbname=$db_name;charset=utf8", $db_user, $db_pass);


} catch(PDOexception $hata) {
  echo 'Bağlantı yok';
}
