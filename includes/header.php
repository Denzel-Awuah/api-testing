
<header>
  <h1>MyVid Collection</h1>
  <h3>An Individual Video Library</h3>


  <?php
session_start();
$_SESSION['style'] = "";
$_SESSION['style2'] = "";
$_SESSION['style3'] = "style='display:none;'";

// If the user is logged in
  if(isset($_SESSION['userid'])){
      $_SESSION['style'] = "style='display:none;'";
      $_SESSION['style2']= "";
      $_SESSION['style3'] = "";
    //  echo "<script> checkIfLoggedIn(); </script>";
  }
  else { // if the user is not logged in
    $_SESSION['style'] = "";
    $_SESSION['style2'] = "style='display:none;'";
    $_SESSION['style3'] = "style='display:none;'";
  //  echo "<script> checkIfLoggedIn(); </script>";
  }

  ?>


  <div class="logs" <?php echo $_SESSION['style'];?>>
    <a href="login.php">Login</a>
  </div>

<div class="logs2" <?php echo $_SESSION['style2'];?>>
  <a href="logout.php">Logout</a>
</div>

</header>



<div class="sidebar">
  <a href="index.php">Home</a>
  <a href="account.php">Create Account</a>
  <a href="editaccount.php" <?php echo $_SESSION['style2'];?> >Edit Account</a>
  <a href="deleteaccount.php" <?php echo $_SESSION['style2'];?> >Delete Account</a>
  <a href="addvid.php" <?php echo $_SESSION['style2'];?> >Add Video</a>
  <a href="editvid.php" <?php echo $_SESSION['style2'];?> >Edit Video</a>
  <a href="search.php">Search</a>
  <a href="displaydetails.php" <?php echo $_SESSION['style2'];?>  >Display Results</a>
</div>
