<?php
include 'includes/library.php';
$pdo = & dbconnect();
 ?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php  $theTitle = "Main Page";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>


    <?php include 'includes/header.php';?>

  <div class="main">


<form class="mainpage" action="displaydetails.php" method="post">

  <h5>Main Page</h5>

  <div class="movie-container">



    <div class="movie-item">
 <img src="img/pic1.jpg" width="175" height="200" ><br>
 <input type="submit" name="submit1" value="Display Details">
    </div>


    <div class="movie-item">
      <img src="img/pic2.jpg" width="175" height="200" ><br>
      <input type="submit" name="submit2" value="Display Details">
    </div>


    <div class="movie-item">
      <img src="img/pic3.jpg" width="175" height="200" ><br>
      <input type="submit" name="submit3" value="Display Details">
    </div>


    <div class="movie-item">
      <img src="img/pic4.jpg" width="175" height="200" ><br>
      <input type="submit" name="submit4" value="Display Details">
    </div>


    <div class="movie-item">
      <img src="img/pic5.jpg" width="175" height="200" ><br>
      <input type="submit" name="submit5" value="Display Details">
    </div>

    <div class="movie-item">
      <img src="img/pic6.jpg" width="175" height="200" ><br>
      <input type="submit" name="submit6" value="Display Details">

    </div>


    <div class="movie-item">
      <img src="img/pic7.jpg" width="175" height="200" ><br>
      <input type="submit" name="submit7" value="Display Details">

    </div>


    <div class="movie-item">
      <img src="img/pic8.jpg" width="175" height="200" ><br>
      <input type="submit" name="submit8" value="Display Details">

    </div>


    <div class="movie-item">
      <?php
      $getmovies = 4;
      $sql="select cover from added_Movies where movieid=?";
      $stmt=$pdo->prepare($sql);
      $stmt->execute([$getmovies]);
      $themovie=$stmt->fetchColumn();
      $getmovies++;
    //  echo $themovie['cover'];
      ?>
      <img src="getImage.php?id=1" width="175" height="200"><br>
      <input type="submit" name="submit9" value="Display Details">

      </div>

  </div>


</form>
</div>

  </body>
</html>
