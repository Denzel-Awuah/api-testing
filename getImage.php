<?php
session_start();
include 'includes/library.php';
$pdo = & dbconnect();

  $id = $_GET['id'];

$sql="select cover from added_Movies where username=?";
$stmt=$pdo->prepare($sql);
$stmt->execute([$_SESSION['username']]);
$themovie=$stmt->fetchColumn();


header("Content-type: image/jpg");
  echo $themovie['cover'];

 ?>
