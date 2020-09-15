<?php

$user="";
$error=false;
//If the user clicks the login button
if(isset($_POST['submit'])){
  include 'includes/library.php';
  $pdo = & dbconnect();


  $error=false;
  $user=$_POST['username'];  //getting entered username
  $pass = $_POST['userpass']; //getting entered password

//Getting the password from the database
  $sql="select password from movie_AccountsCreated where username=?";

  $stmt=$pdo->prepare($sql);
  $stmt->execute([$user]);
  $dbpass=$stmt->fetchColumn();

//check if the password entered is a valid password and is in the database
  if($dbpass && password_verify($pass, $dbpass)){
     session_start();
     $_SESSION['username'] = $user; //set the session user to the entered username


     //getting the userid of the logged in user
     $sql2="select userid from movie_AccountsCreated where username=?";
     $stmt2=$pdo->prepare($sql2);
     $stmt2->execute([$user]);
     $userid=$stmt2->fetchColumn();

     //getting the name of the logged in user
     $sql3="select name from movie_AccountsCreated where username=?";
     $stmt3=$pdo->prepare($sql3);
     $stmt3->execute([$user]);
     $name=$stmt3->fetchColumn();

     //getting the email of the logged in user
     $sql4="select email from movie_AccountsCreated where username=?";
     $stmt4=$pdo->prepare($sql4);
     $stmt4->execute([$user]);
     $email=$stmt4->fetchColumn();

     // Setting all variable collected from database into session
     $_SESSION['username'] = $user;
     $_SESSION['userid'] = $userid;
     $_SESSION['name'] = $name;
     $_SESSION['email'] = $email;
     header("Location: index.php"); //go to the main page 
     exit();
  }else{
    $error=true;
  }

}


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php  $theTitle = "Login";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>

  <?php include 'includes/header.php';?>

  <div class="main">

<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

<h1>Login</h1>

  <div>
    <label for="username">Username:</label>
    <input type="text" name="username" id="userlogin" value=" ">
  </div>

  <div>
    <label for="userpass">Password:</label>
    <input type="password" name="userpass" id="passlogin" value="">
  </div>

  <div>
  <?php if ($error){?><span class="error">Your username or password was invalid</span> <?php }?>
  </div>

  <div>
    <label for="rememberme">Remember Me </label>
  <input type="checkbox" name="rememberme" value="">
  <a href="#"> Forgot Password?  </a>
  </div>


  <input type="submit" name="submit" value="Submit">



</form>
</div>

  </body>
</html>
