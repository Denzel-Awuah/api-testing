<?php
session_start();
session_destroy(); //destroy the session and all its content

 ?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <?php  $theTitle = "Login";
     include 'includes/headincludes.php';

     ?>
   </head>
   <body>


   <?php include 'includes/header.php';?>


   <div class="main">
   <h2>You have successfully logged out</h2>
 </div>

  </body>
</html>
