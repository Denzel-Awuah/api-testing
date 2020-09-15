<?php
include 'includes/library.php';




if (isset($_POST['checkTitle'])) {
  $title=$_POST['checkTitle'];
  if(strlen($title) <= 0 || $title ==" ") //If the title is not valid

  echo "You must enter a valid Movie Title"; //display error on screen with ajax
  else {
    echo false;
  }
}


if (isset($_POST['checkRuntime'])) {
  $runtime=$_POST['checkRuntime'];

  if(!is_numeric($runtime) || $runtime < 1) //the runtime must be entered as integers
  echo "You must enter a runtime using numbers!"; //display error on screen with ajax
  else {
    echo false;
  }
}

if (isset($_POST['checkActors'])) {
  $actors=$_POST['checkActors'];

  if(strlen($actors) <= 0 || $actors ==" "|| strpos($actors, " ")===FALSE) //If the actors field is invalid
  echo "You must enter the actors in the movie"; //display error on screen with ajax
  else {
    echo false;
  }
}


if (isset($_POST['checkStudio'])) {
  $studio=$_POST['checkStudio'];

  if(strlen($studio) <= 0 ||strpos($actors, " ")===FALSE) //If a studio is not entered
  echo "You must enter the movie's studio"; //display error on screen with ajax
  else {
    echo false;
  }
}


if (isset($_POST['checkPlot'])) {
  $plot=$_POST['checkPlot'];

  if(strlen($plot) < 19 ) //If a studio is not entered
  echo "Your Plot must be atleast 20 characters"; //display error on screen with ajax
  else {
    echo false;
  }
}




 ?>
