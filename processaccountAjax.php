<?php


include 'includes/library.php';
$pdo = & dbconnect();
$errors=array();


//validate username
if (isset($_POST['checkUsername'])) {
  $username=$_POST['checkUsername'];

  if(strlen($username) <= 0 || $username ==" ") //the username cannot be empty and cannot be a space
  echo "You must enter a username"; //display error on screen with ajax
else {
  echo false;
}

//Select usernames from database to compare with entered username
  $stmt=$pdo->query("select username from movie_AccountsCreated");
    foreach ($stmt as $row) {   //loop through all usernames in database
      if ($username == $row['username']) {   //if the username is already in the database
        echo "This username has already been chosen. Please select a different one."; //display error
      }
    }
    echo false;

}



//validate name
if (isset($_POST['checkName'])) {
  $name=$_POST['checkName'];
  if(strlen($name) <= 0 || $name== " " ) //if name is empty or if it is a space
  echo "You must enter a valid name"; //display error
else {
  echo false;

}

}



//validate email
if (isset($_POST['checkEmail'])) {

$email = $_POST['checkEmail'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL))  //check if the the email is invalid
echo "You must enter a valid email"; // if true, display error
else {
  echo false;
}

}



if (isset($_POST['checkPassword'])) {
  $password=$_POST['checkPassword']; // password must be atleast 5 characters long
$pass = $_POST['checkPassword'];
  if(strlen($password) <= 4)
  echo "Your password must be atleast 5 characters long";

}

 ?>
