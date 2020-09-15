<?php
include 'includes/library.php';
$pdo = & dbconnect();

//if display details button is clicked for this movie
if (isset($_POST['submit1'])) {

$moviename = "Black Panther";
$Mpaa = "PG-13";
$studio= "Marvel Studios";
$theatrerelease= "January 29, 2018";
$actors= "Chadwick Boseman, Michael B. Jordan, Lupita Nyong'o";
$genres= "Comedy, Action";
$year= "2018";
$dvdrelease= "Febuary 16th, 2018";
$pic = "img/pic1.jpg";
}elseif (isset($_POST['submit2'])) {   //if display details button is clicked for this movie

  $moviename = "The Incredibles 2";
  $Mpaa = "PG";
  $studio= "Walt Disney Pictures, Pixat Animation Studios";
  $theatrerelease= "June 5, 2018";
  $actors= "Craig T. Nelson, Holly Hunter, Sarah Vowell, Huckleberry Milner,
    Samuel L. Jackson";
  $genres= "Action, Adventure, Animation";
  $year= "2018";
  $dvdrelease= "June 15th, 2018";
  $pic = "img/pic2.jpg";


}elseif (isset($_POST['submit3'])) {   //if display details button is clicked for this movie

  $moviename = "Scary Movie 2";
  $Mpaa = "R";
  $studio= "Gold/Miller Productions";
  $theatrerelease= "July 4th, 2001";
  $actors= "Shawn Wayans, Marlon Wayans, Anna Faris, Regina Hall,
Chris Masterson";
  $genres= "Comedy";
  $year= "2001";
  $dvdrelease= "July 4th, 2001";
  $pic = "img/pic3.jpg";

}elseif (isset($_POST['submit4'])) {  //if display details button is clicked for this movie

  $moviename = "The Exorcist";
  $Mpaa = "R";
  $studio= "Hoya Productions";
  $theatrerelease= "December 26, 1973";
  $actors= "Ellen Burstyn, Max von Sydow, Lee J. Cobb,
Kitty Winn";
  $genres= "Horror";
  $year= "1973";
  $dvdrelease= "December 26, 1973";
  $pic = "img/pic4.jpg";

}elseif (isset($_POST['submit5'])) {   //if display details button is clicked for this movie

  $moviename = "The Conjuring";
  $Mpaa = "R";
  $studio= "New Line Cinema";
  $theatrerelease= "July 15th, 2013";
  $actors= "Vera Farmiga, Patrick Wilson, Ron Livingston, Lili Taylor";
  $genres= "Horror";
  $year= "2013";
  $dvdrelease= "July 19th, 2013";
  $pic = "img/pic5.jpg";

}elseif (isset($_POST['submit6'])) {  //if display details button is clicked for this movie

  $moviename = "Titanic";
  $Mpaa = "PG-13";
  $studio= "Paramount Pictures";
  $theatrerelease= "November 1st, 1997";
  $actors= "Leonardo DiCaprio, Kate Winslet, Billy Zane, Kathy Bates,
Frances Fisher";
  $genres= "Drama, Romance";
  $year= "1997";
  $dvdrelease= "December 19th, 2013";
  $pic = "img/pic6.jpg";

}elseif (isset($_POST['submit7'])) {   //if display details button is clicked for this movie
  $moviename = "Superbad";
  $Mpaa = "R";
  $studio= "The Apatow Company";
  $theatrerelease= "August 17th, 2007";
  $actors= "	Jonah Hill, Michael Cera, Seth Rogen,
Bill Hader";
  $genres= "Comedy";
  $year= "2007";
  $dvdrelease= "August 17th, 2007";
  $pic = "img/pic7.jpg";

}elseif (isset($_POST['submit8'])) {    //if display details button is clicked for this movie
  $moviename = "21 Jump Street";
  $Mpaa = "R";
  $studio= "SJC Studios";
  $theatrerelease= "March 12th, 2012";
  $actors= "Jonah Hill, Channing Tatum, Brie Larson, Dave Franco";
  $genres= "Action, Comedy";
  $year= "2012";
  $dvdrelease= "March 16th, 2012";
  $pic = "img/pic7.jpg";
}else {   //if display details button is clicked for this movie

  session_start();

//Getting movie info from database based off logged in user

  //get title from database
  $sql="select title from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $moviename=$stmt->fetchColumn(); //store title in variable

//get mpaa frim database
  $sql="select mpaa from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $Mpaa=$stmt->fetchColumn(); //store title in variable

//get studio from database
  $sql="select studio from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $studio=$stmt->fetchColumn(); //store title in variable


//get theatre Release date form database
  $sql="select theatreRelease from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $theatrerelease=$stmt->fetchColumn(); //store title in variable


//get actors from database
  $sql="select actors from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $actors=$stmt->fetchColumn(); //store title in variable

//get genre from database
  $sql="select genre from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $genres=$stmt->fetchColumn(); //store title in variable


//get year from database
  $sql="select year from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $year=$stmt->fetchColumn(); //store title in variable


//get dvd release from database
  $sql="select dvdRelease from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $dvdrelease=$stmt->fetchColumn(); //store title in variable


//get the movie cover from database
  $sql="select cover from added_Movies where username=?";
  //query to select title from database
  $stmt=$pdo->prepare($sql);
  $stmt->execute([$_SESSION['username']]);
  $pic=$stmt->fetchColumn(); //store title in variable

}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php  $theTitle = "Movie Details";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>

  <?php include 'includes/header.php';?>

  <div class="main">



<form class="details" action="index.html" method="post">

<div class="divdets">

<!-- Display All movie details for selected movie  -->

  <h3><?php echo $moviename ?></h3>

<img src="<?php echo $pic ?>" width="350" height="350" >
  <p>MPAA: <?php echo $Mpaa ?></p>
  <p>Studio: <?php echo $studio ?></p>
  <p>Theatre Release: <?php echo $theatrerelease?></p>
  <p>Actors: <?php echo $actors ?></p>
  <p>Genres: <?php echo $genres?></p>
  <p>Year: <?php echo $year ?></p>
  <p>DVD Release: <?php echo $dvdrelease ?></p>

</div>




</form>
</div>



  </body>
</html>
