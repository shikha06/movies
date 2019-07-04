<?php

include 'connect.php';
?>

<html>
<head>
  <style>
    
    .article-container{
   width: 900px;
   background-color: black;
   padding: 30px;
   margin-left: 270px;

}

body{
  background-image: url('image/background.png');
}
  </style>
  </head>
  <body>


   
    <div class="article-container">
     <?php
     $title = mysqli_real_escape_string($conn, $_GET['title']);
      $sql = "SELECT * from search WHERE a_title='$title'";
      $result = mysqli_query($conn, $sql);
      $queryResults = mysqli_num_rows($result);
      
      if( $queryResults > 0)
      {
        while ($row = mysqli_fetch_assoc($result)){
              echo "<div class ='article-box' style='padding-bottom: 30px; width: 100%; background-color: white; text-align: center; box-shadow: 5px 5px 5px;'>
                  <h3 style='color: blue;'> ".$row['a_title']." </h3>
                  <p style='color: red;'> ".$row['a_text']." </p>
                  <p> ".$row['a_date']." </p>
                  <p> ".$row['a_actor']." </p>
              </div>";
        }
      }
     ?>

    </div>

<div class="col-md-2"></div>
            <div class="col-md-6" style="background-color: black; height: 280px; width: 1450px; margin-left: 10px; margin-top: 50px; box-shadow: 
            6px 6px 6px 6px BLACK;">
    <img src="image/genttleman.jpg" alt="spiderman" class="im1" style="height: 280px; width: 280px; margin-left: 8px; margin-top: 4px; "  onclick="fun2()" >
            <img src="image/beauty.png" class="im1" style="height: 280px; width: 280px; margin-top: 4px; " onclick="fun2()">
            <img src="image/aadekhen.jpg" class="im1" style="height: 280px; width: 280px; margin-top: 4px; " onclick="fun2()">

            <img src="image/ajanachle.jpg" class="im1" style="height: 280px; width: 300px; margin-top: 4px; " onclick="fun2()">
            <img src="image/batman.jpg" class="im1" style="height: 280px; width: 280px; margin-top: 4px; " onclick="fun2()">
</div>

  </body>
  </html>