<?php
include 'backend/config/database.php';

$id = $_POST['id'];

$sql = "SELECT last_login FROM developers WHERE id = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->bind_result($last_login);
$stmt->fetch();
$stmt->close();
$connection->close();

echo $last_login;
?>
