<?php
include 'includes/library.php';

$errors=array();

$username = $_POST['username'];
$name = $_POST['name'];
$email = $_POST['email'];
$confirmpass = $_POST['confirmpass'];
$password = $_POST['password'];

//If username is invalid, add error
if (strlen($username) <= 0 || $username ==" ") {
  $errors[]= "Your username is invalid";
}

//If name is invalid, add error
if (strlen($name) <= 0 || $name ==" ") {
  $errors[]= "Your name is invalid";
}

//If email is invalid, add error
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
  $errors[]= "Please enter a valid email";
}

//If password is invalid, add error
if (strlen($password) < 4) {
  $errors[]= "Your password must be atleast 5 characters";
}

//check if both password fields match
if ($confirmpass != $password) {
  $errors[]= "Your passwords entered do not match";

}

//if there are no errors
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

// hash the password
$hash = password_hash($password, PASSWORD_DEFAULT);





//add account details to database
  $sql="insert into movie_AccountsCreated (username, name, email, password) values (?,?,?,?)";
  $stmt= $pdo->prepare($sql);
  $stmt ->execute([$username, $name, $email, $hash]);





// then create seesion for the logged in user
session_start();
  $_SESSION['userid'] = $pdo->lastInsertId();
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
     <?php  $theTitle = "Create Account";
     include 'includes/headincludes.php';

     ?>
   </head>
   <body>

     <?php include 'includes/header.php';?>


       <div class="showerror">
         <h3><u>Errors</u></h3>
       <?php
       //Display all errors that have been detected
         foreach ($errors as $error)
           echo "<br>". $error;
       ?>
     </div>






   </body>
 </html>
