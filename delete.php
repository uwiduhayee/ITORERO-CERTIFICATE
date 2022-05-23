<?php
require 'connection_pdo.php';
$par_id = $_GET['id'];
$sql = 'DELETE FROM participants WHERE par_id=:id';
$statement = $db->prepare($sql);
if ($statement->execute([':id' => $par_id])) {
  header("Location: /php/view.php");
}