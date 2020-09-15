<?php
include 'includes/library.php';

$errors=array();


  $title = $_POST['title'];


$rating = $_POST['rating'];
if ($rating == null)  //If a rating has not been selected
 $errors[]="You must enter a rating";

//Variables for each genre selection
$genre1 = $_POST['genre1'] ?? null;
$genre2 = $_POST['genre2'] ?? null;
$genre3 = $_POST['genre3'] ?? null;
$genre4 = $_POST['genre4'] ?? null;
$genre5 = $_POST['genre5'] ?? null;
$genre6 = $_POST['genre6'] ?? null;
$genre = "";

if($genre1 ==null && $genre2 ==null && $genre3 ==null
&& $genre4 ==null && $genre5 ==null && $genre6 ==null) // If none of the genre boxes have been checked
 $errors[]="You must select at least 1 genre";  // add error

 if ($genre1 != null) {  //if the first genre box is checked
   $genre = $genre1;  //add checked genre to genre string
 }

 if ($genre2 != null) {     //if the second genre box is checked
   $genre = $genre." ".$genre2;  //add checked genre to genre string
 }

 if ($genre3 != null) {       //if the third genre box is checked
   $genre = $genre." ".$genre3;   //add checked genre to genre string
 }

 if ($genre4 != null) {       //if the forth genre box is checked
   $genre = $genre." ".$genre4;   //add checked genre to genre string
 }
 if ($genre5 != null) {       //if the fifth genre box is checked
   $genre = $genre." ".$genre5;   //add checked genre to genre string
 }
 if ($genre6 != null) {       //if the sixth genre box is checked
   $genre = $genre." ".$genre6;   //add checked genre to genre string
 }


 $mpaarating = $_POST['mpaarating'] ?? null;
 if($mpaarating ==null) // if the user has not selected a MPAA rating
  $errors[]="You must select a MPAA rating";    // add error


  $year = $_POST['year'];
  if ($year == null)    //If the user has not selected a Year
   $errors[]="You must enter a Year for the movie"; // add error



   $runtime= $_POST['runtime'];
   if ($runtime == null)  //if the runtime field is null
    $errors[]="You must enter a runtime for the movie";   // add error



    $theatrerelease = $_POST['TheatreRelease'] ?? null;
    if ($theatrerelease == null)  // if the user does not select a date for theatre release
     $errors[]="You must enter a date for the Theatre Release";   // add error


    $dvdrelease = $_POST['DVDRelease'] ?? null;
    if ($dvdrelease == null)  //if the user does not select a date for DVD release
     $errors[]="You must enter a date for the DVD Release"; // add error


     $actors = $_POST['actors'];
     if ($actors == null)  // if the actors field is null
      $errors[]="You must enter the Actors names from the movie"; // add error

     $studio = $_POST['studio'];
     if ($studio == null || strpos($actors, " ")===FALSE)  // if the studio field is null
      $errors[]="You must enter the Studio of the movie";  // add error


     $plot = $_POST['plot'];
     if ($plot == null|| strlen($plot) < 19 )  // If the plot is less then 15 characters
      $errors[]="You must enter a plot summary of at least 20 characters for the movie"; // add error



      // Variables for each Video Type Selection
      $vtype1 = $_POST['vtype1'] ?? null;
      $vtype2 = $_POST['vtype2'] ?? null;
      $vtype3 = $_POST['vtype3'] ?? null;
      $vtype4 = $_POST['vtype4'] ?? null;
      $vtype5 = $_POST['vtype5'] ?? null;
      $vtype6 = $_POST['vtype6'] ?? null;
      $vtype = "";

      if($vtype1==null && $vtype2==null && $vtype3==null &&
       $vtype4==null  && $vtype5==null && $vtype6==null) // If none of the Video Type boxes have been checked
       $errors[]="You must select at least 1 Video Type";  // add error

       if ($vtype1 != null) {  //if the first vtype box is checked
         $vtype = $vtype1;  //add checked vtype to genre string
       }

       if ($vtype2 != null) {     //if the second vtype box is checked
         $vtype = $vtype." ".$vtype2;  //add checked vtype to vtype string
       }

       if ($vtype3 != null) {     //if the third vtype box is checked
         $vtype = $vtype." ".$vtype3;  //add checked vtype to vtype string
       }
       if ($vtype4 != null) {     //if the fourth vtype box is checked
         $vtype = $vtype." ".$vtype4;  //add checked vtype to vtype string
       }
       if ($vtype5 != null) {     //if the fifth vtype box is checked
         $vtype = $vtype." ".$vtype5;  //add checked vtype to vtype string
       }
       if ($vtype6 != null) {     //if the six vtype box is checked
         $vtype = $vtype." ".$vtype6;  //add checked vtype to vtype string
       }

       $cover = $_POST['cover'] ?? null;
       if ($cover == null)  //if the user has not uploaded a movie cover
       $errors[]="You must upload a cover for the movie";   //add error




   if(sizeof($errors)==0){

     //call database connection function
     $pdo = & dbconnect();
     session_start();

     $username = $_SESSION['username'];

    //add account details to database
    $sql="insert into added_Movies (title, rating, genre, mpaa, year, runtime, theatreRelease, dvdRelease, actors, studio, plot, vidType, cover, username) values (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
    $stmt= $pdo->prepare($sql);
    $stmt ->execute([$title, $rating, $genre, $mpaarating, $year, $runtime, $theatrerelease, $dvdrelease, $actors, $studio, $plot, $vtype, $cover, $username]);

    //go to the main page
      header("Location:index.php");

}





 ?>


 <!DOCTYPE html>
 <html lang="en">
   <head>
     <?php  $theTitle = "Add Video";
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
