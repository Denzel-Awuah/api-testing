<?php
include 'includes/library.php';
$pdo = & dbconnect();
 ?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php  $theTitle = "Edit Account";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>

  <?php include 'includes/header.php';?>


  <div class="main">

  <form class="editinfo" action="processeditaccount.php" method="post">

    <h2>Edit Account</h2>

  <div>
    <label for="username">New Username:</label>

    <!-- Stores database value in the textbok -->
    <input type="text" name="username" id="username" value="<?php echo $_SESSION['username']; ?>">  
  </div>


  <div>
    <label for="name">New Name:</label>
    <!-- Stores database value in the textbok -->
    <input type="text" name="name" id="name" value="<?php echo$_SESSION['name'];  ?>">
  </div>


  <div>
    <label for="email">New Email:</label>
    <!-- Stores database value in the textbok -->
    <input type="text" name="email" id="email" value="<?php echo $_SESSION['email']; ?>">
  </div>



  <div>
    <label for="password">New Password:</label>
    <input type="password" name="password" id="password" value="">
  </div>


  <div>
    <label for="confirmpass">Confirm New Password:</label>
    <input type="password" name="confirmpass" id="confirmpass" value="">
  </div>


  <input type="submit" name="submit" value="Save Changes">


  </form>
  </div>


  </body>
</html>
