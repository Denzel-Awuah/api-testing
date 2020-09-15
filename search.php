<?php
include 'includes/library.php';
$pdo = & dbconnect();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php  $theTitle = "Search Movie";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>

    <?php include 'includes/header.php';?>

  <div class="main">

<form class="search" action="index.html" method="post">


<div>
<label for="usersearch">Search: </label>
<input type="text" name="usersearch" value="">
<input type="submit" name="submit" value="Enter Search">
</div>

</form>
</div>

  </body>
</html>
