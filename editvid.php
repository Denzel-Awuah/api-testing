<?php
include 'includes/library.php';
$pdo = & dbconnect();
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php  $theTitle = "Edit Video";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>

  <?php include 'includes/header.php';?>



  <div class="main">


    <form class="addvid" action="processaddvid.php" method="post">

      <h2><u>Edit Video</u></h2>

      <div>
        <?php // Getting the title from the database based on logged in user
        $sql="select title from added_Movies where username=?";
        //query to select title from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $title=$stmt->fetchColumn(); //store title in variable
        ?>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?php echo $title ?>">
      </div>

      <div>
        <?php // Getting the rating from the database based on logged in user
        $sql="select rating from added_Movies where username=?";
        //query to select rating from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $rating=$stmt->fetchColumn(); //store rating in variable
        ?>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" value="<?php echo $rating ?>" id="rating" min="1" max="5">
      </div>

      <div>
        <?php // Getting the genre from the database and pre checking their selected genres
        $sql="select genre from added_Movies where username=?";
        //query to select genre from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $genre=$stmt->fetchColumn();  //store genre in variable


        if( strpos( $genre, "Comedy" ) === false) // if the movie is not a comedy
        $comedychecked =null;
        else //If the movie is a comedy
          $comedychecked = "checked"; //Pre select on page load


        if( strpos( $genre, "Horror" ) === false) // if the movie is not a horror
        $horrorchecked = null;
        else  //if the movie is a horror
          $horrorchecked = "checked"; //Pre select on page load

        if( strpos( $genre, "Drama" ) === false)  //If the movie is not a drama
        $dramachecked = null;
        else   // if the movie is a drama
          $dramachecked = "checked"; //Pre select on page load


        if( strpos( $genre, "Action" ) === false)  //If the movie is not an Action movie
        $actionchecked = null;
        else   // if the movie is action
          $actionchecked = "checked"; //Pre select on page load


        if( strpos( $genre, "Adventure" ) === false)  //If the movie is not aa Adventure movie
        $adventurechecked = null;
        else   // if the movie is an adventure
          $adventurechecked = "checked"; //Pre select on page load


        if( strpos( $genre, "Romance" ) === false)  //If the movie is not a Romance
        $romacechecked = null;
        else   // if the movie is a Romance
          $romacechecked = "checked"; //Pre select on page load
        ?>

        <label for="genre">Genre:</label>
        <input type="checkbox" name="genre1" value="Comedy" <?php echo $comedychecked ?> > Comedy
        <input type="checkbox" name="genre2" value="Horror" <?php echo $horrorchecked ?>> Horror
        <input type="checkbox" name="genre3" value="Drama"  <?php echo $dramachecked ?>> Drama
        <input type="checkbox" name="genre4" value="Action"  <?php echo $actionchecked ?>> Action
        <input type="checkbox" name="genre5" value="Adventure"  <?php echo $adventurechecked ?>> Adventure
        <input type="checkbox" name="genre6" value="Romance"  <?php echo $romacechecked ?>> Romance
      </div>


      <div>
        <?php // Getting the MPAA rating from the database
        $sql="select mpaa from added_Movies where username=?";
        //query to select mpaa rating from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $mpaa=$stmt->fetchColumn(); // store mpaa rating in variable

        if( strpos( $mpaa, "G" ) !== false && strlen($mpaa) ==1) // if the rating is G
          $gchecked = "checked"; //Pre select on page load
          else
            $gchecked = null;


        if( strpos( $mpaa, "PG13" ) !== false && strlen($mpaa) ==4 ) // If the rating is PG13
          $pg13checked = "checked"; //Pre select on page load
          else
            $pg13checked = null;


        if( strpos( $mpaa, "PG" ) !== false && strlen($mpaa) ==2) // If the rating is PG
          $pgchecked = "checked"; //Pre select on page load
          else
            $pgchecked = null;



        if( strpos( $mpaa, "R" ) === false) // If the rating is R
        $rchecked =null;
        else
          $rchecked = "checked"; //Pre select on page load

        if( strpos( $mpaa, "NC" ) === false) // if the rating is NC
        $ncchecked =null;
        else
          $ncchecked = "checked";  //Pre select on page load

        ?>


        <label for="mpaarating">MPAA Rating:</label>
        <input type="radio" name="mpaarating" value="G" <?php echo $gchecked ?> > G
        <input type="radio" name="mpaarating" value="PG" <?php echo $pgchecked ?>> PG
        <input type="radio" name="mpaarating" value="PG13" <?php echo $pg13checked ?>> PG-13
        <input type="radio" name="mpaarating" value="R" <?php echo $rchecked ?>> R
        <input type="radio" name="mpaarating" value="NC" <?php echo $ncchecked ?>> NC-17
      </div>


      <div>

        <?php // Getting the year from the database based on logged in user
        $sql="select year from added_Movies where username=?";
        //query to select year from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $year=$stmt->fetchColumn(); //store year in variable
        ?>

        <label for="year">Year:</label>
        <input type="number" name="year" id="year" min="1900" max="2019" value="<?php echo $year ?>">
      </div>

      <div>

        <?php // Getting the runtime from the database
        $sql="select runtime from added_Movies where username=?";
        //query to select runtime from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $runtime=$stmt->fetchColumn(); //store runtime in variable
        ?>
        <label for="runtime">Run Time(in mins):</label>
        <input type="text" name="runtime" id="runtime" value="<?php echo $runtime ?>">
      </div>


      <div>

        <?php // Getting the Theatre Release from the database based on logged in user
        $sql="select theatreRelease from added_Movies where username=?";
        //query to select theatre release from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $theatrerelease=$stmt->fetchColumn(); //store theatre release in variable
        ?>

        <label for="TheatreRelease">Theatre Release:</label>
        <input type="date" name="TheatreRelease" id="TheatreRelease" value="<?php echo $theatrerelease ?>">
      </div>

      <div>

        <?php // Getting the DVD release from the database based on logged in user
        $sql="select dvdRelease from added_Movies where username=?";
        //query to select DVD release from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $dvdrelease=$stmt->fetchColumn(); //store DVD release in variable
        ?>
        <label for="DVDRelease">DVD Release:</label>
        <input type="date" name="DVDRelease" id="DVDRelease" value="<?php echo $dvdrelease ?>">
      </div>


      <div>

        <?php // Getting the actors from the database based on logged in user
        $sql="select actors from added_Movies where username=?";
        //query to select actors from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $actors=$stmt->fetchColumn(); //store actors in variable
        ?>
        <label for="actors">Actors:</label>
        <input type="text" name="actors" id="actors" value="<?php echo $actors ?>">
      </div>

      <div>

        <?php // Getting the studio from the database based on logged in user
        $sql="select studio from added_Movies where username=?";
        //query to select studio from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $studio=$stmt->fetchColumn(); //store studio in variable
        ?>
        <label for="studio">Studio:</label>
        <input type="text" name="studio" id="studio" value="<?php echo $studio ?>">
      </div>


      <div>

        <?php // Getting the Plot from the database based on logged in user
        $sql="select plot from added_Movies where username=?";
        //query to select Plot from database
        $stmt=$pdo->prepare($sql);
        $stmt->execute([$_SESSION['username']]);
        $plot=$stmt->fetchColumn(); //store Plot in variable
        ?>
        <label for="plot">Plot Summary:</label>
        <input type="text" name="plot" id="plot" value="<?php echo $plot ?>">
      </div>

      <div>
        <label for="vtype">Video Type:</label>
        <input type="checkbox" name="vtype1" value="DVD"> DVD
        <input type="checkbox" name="vtype2" value="Blu-Ray"> Blu-Ray
        <input type="checkbox" name="vtype3" value="4K Disk"> 4K Disk
        <input type="checkbox" name="vtype4" value="Digital SD"> Digital SD
        <input type="checkbox" name="vtype5" value="Digital HD"> Digital HD
        <input type="checkbox" name="vtype6" value="Digital 4K"> Digital 4K
      </div>


      <div>
        <label for="cover">Upload Cover Image:</label>
        <input type="file" name="cover">
      </div>



      <div>
        <input type="submit" name="submit" value="Add Video">
        <input type="button" name="reset" value="Reset">
      </div>


    </form>
</div>

  </body>
</html>
