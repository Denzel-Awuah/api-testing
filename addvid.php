

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php  $theTitle = "Add Video";
    include 'includes/headincludes.php';

    ?>
  </head>
  <body>

  <?php include 'includes/header.php';?>

  <div class="main">


    <form class="addvid" action="processaddvid.php" method="post">

      <h2><u>Add Video</u></h2>

      <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value=""> <p id="titleError"></p>
      </div>

      <div>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" min="1" max="5">
      </div>

      <div>
        <label for="genre">Genre:</label>
        <input type="checkbox" name="genre1" value="Comedy"> Comedy
        <input type="checkbox" name="genre2" value="Horror"> Horror
        <input type="checkbox" name="genre3" value="Drama"> Drama
        <input type="checkbox" name="genre4" value="Action"> Action
        <input type="checkbox" name="genre5" value="Adventure"> Adventure
        <input type="checkbox" name="genre6" value="Romance"> Romance

      </div>


      <div>
        <label for="mpaarating">MPAA Rating:</label>
        <input type="radio" name="mpaarating" value="G"> G
        <input type="radio" name="mpaarating" value="PG"> PG
        <input type="radio" name="mpaarating" value="PG13"> PG-13
        <input type="radio" name="mpaarating" value="R"> R
        <input type="radio" name="mpaarating" value="NC"> NC-17
      </div>


      <div>
        <label for="year">Year:</label>
        <input type="number" name="year" id="year" min="1900" max="2019">
      </div>

      <div>
        <label for="runtime">Run Time(in mins):</label>
        <input type="text" name="runtime" id="runtime" value=""> <p id="runtimeError"></p>
      </div>


      <div>
        <label for="TheatreRelease">Theatre Release:</label>
        <input type="date" name="TheatreRelease" id="TheatreRelease" value="">
      </div>

      <div>
        <label for="DVDRelease">DVD Release:</label>
        <input type="date" name="DVDRelease" id="DVDRelease" value="">
      </div>


      <div>
        <label for="actors">Actors:</label>
        <input type="text" name="actors" id="actors" value=""> <p id="actorsError"></p>
      </div>

      <div>
        <label for="studio">Studio:</label>
        <input type="text" name="studio" id="studio" value=""> <p id="studioError"></p>
      </div>


      <div>
        <label for="plot">Plot Summary:</label>
        <input type="text" name="plot" id="plot" value=""> <p id="plotError"></p>
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
