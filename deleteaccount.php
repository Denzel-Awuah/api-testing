<?php
//Cif user clicks delete button
if(isset($_POST['delete'])){
  include 'includes/library.php';
  $pdo = & dbconnect();
  session_start();

//query to delete the account from database
  $sql="DELETE FROM movie_AccountsCreated WHERE userid = ?";
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['userid']]);

  header("Location: logout.php");  //go to logout page
}

// if user clicks cancel button
if(isset($_POST['cancel'])){
  header("Location: index.php");  //go to main page

}

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

<form class="deleteaccount" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<h2>Click button below to confirm deletion of your account and all media.</h2>
<input type="submit" name="delete" id="delete" value="Confirm Delete">
<input type="submit" name="cancel" value="Cancel">

</form>


  </div>
</body>
</html>
