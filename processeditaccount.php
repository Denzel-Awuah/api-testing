<?php
include 'includes/library.php';


$errors=array();
session_start();

//get and validate the users username, must have lenth greater than 0
$username=$_POST['username'];
if(strlen($username) <= 0)
$errors[]="You must enter a valid Username";



//get and validate the users name, must have length and at least one space
$name=$_POST['name'];
if(strlen($name) < 0 || $name== " ")
$errors[]="You must enter a valid name";


//get and validate the users email
$email = $_POST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL))
$errors[]="You must enter a valid email";


//Check to see if password is valid, if not, add error
$password=$_POST['password'];
if(strlen($password) <= 4)
$errors[]="Your password must be atleast 5 characters long";


//Check if passwords match
$confirmpass=$_POST['confirmpass'];
if($confirmpass != $password)
$errors[]="Your passwords entered do not match";


// If there are no errors 
if(sizeof($errors)==0){

  //call database connection function
  $pdo = & dbconnect();

  //check for existing email
  $sql="select 1 from movie_AccountsCreated where email = ?";
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$email]);

  //If the entered email has already been selected
  if($stmt->fetchColumn()){
    $errors[] = "<h2>This email has already been registered</h2>";
  }else{ // if user enters new valid email

    //hash the password
    $hash = password_hash($password, PASSWORD_DEFAULT);


  $sql = "UPDATE movie_AccountsCreated set username = ?, name = ?, email = ?, password = ? where userid = ?";
  $stmt =  $pdo->prepare($sql)->execute([$username, $name, $email, $hash, $_SESSION['userid']]);





$_SESSION['username'] = $username;
$_SESSION['name'] = $name;
$_SESSION['email'] = $email;


    //go to the main page
      header("Location:index.php");
  }

}

 ?>



 <!DOCTYPE html>
 <html lang="en">
   <head>

     <?php  $theTitle = "Edit Account";
     include 'includes/headincludes.php';
     ?>

   </head>
   <body>
     <?php include 'includes/header.php';?>

     <div class="showerror">
       <h3><u>Errors</u></h3>

     <?php
       foreach ($errors as $error)
         echo "<br>". $error;
     ?>
    </div>

   </body>
 </html>
