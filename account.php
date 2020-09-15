
<?php
include 'includes/library.php';
$pdo = dbconnect();




 ?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <?php  $theTitle = "Create Account";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>

    <?php include 'includes/header.php';?>

  <div class="main">

  <form class="info" action="processaccount.php" method="post">

    <h2>Create Account</h2>



  <div >
    <label for="username">Username:</label>
    <input type="text" name="username" id="createusername" value=""> <p id="usernameError"></p>
  </div>


  <div>
    <label for="name">Name:</label>
    <input type="text" name="name" id="createname" value=""> <p id="nameError"></p>
  </div>


  <div>
    <label for="email">Email:</label>
    <input type="text" name="email" id="createemail" value=" "> <p id="emailError"></p>
  </div>



  <div>
    <label for="password">Password:</label>
    <input type="password" name="password" id="myPassword" value=""> <p id="passwordError"></p>
    <!-- <progress value="" max="100" id="strength"></progress> -->
  </div>


  <div>
    <label for="confirmpass">Confirm Password:</label>
    <input type="password" name="confirmpass" id="myConfirmpass" value="">
  </div>


  <input type="submit" id="submitbtn" name="submit" value="Create Account">


</form>
</div>


  </body>
</html>
