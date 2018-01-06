<?php

include('./connect.php');

$id = $_GET['id'];

$query1 = $db->prepare('SELECT * FROM notlar WHERE id = ?');
$query1->execute(array($id));
$row = $query1->fetch();

$not_adi = $row['not_adi'];
$not_id = $row['not_id'];

// -------------- DELETE

$query = $db->prepare('DELETE FROM notlar WHERE id = ?');
$query->execute(array($id));

header('Location: /not/select.php');
