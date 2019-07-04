<?php
 include 'connect.php';
?>
<html>
<head>
	<style>
		
		.article-conntainer{
   width: 900px;
   background-color: #fff;
   padding: 30px;

.article-box{
  padding-bottom: 30px;
  width: 100%;
  background-color: white;

}


}
body{
	background-image: url('image/background.png');
}
	</style>
	</head>
	<body>
<h1 style="color:red;">SEARCH PAGE</h1>
 <div class="article-container">
    <?php
       if(isset($_POST['submit-search']))
       {
       	  $search = mysqli_real_escape_string($conn, $_POST['search']);
       	  $sql = "SELECT * from search where a_title LIKE '%$search%' OR a_text LIKE '%$search%' OR a_actor LIKE '%$search%' OR a_date LIKE '%$search%'";
       	  $result = mysqli_query($conn, $sql);
       	  $queryResult = mysqli_num_rows($result);
           echo "<div style='width: 100%; background-color: white;'> There are  ".$queryResult."results </div>";
       	  if($queryResult > 0)
       	  {
             while($row = mysqli_fetch_Assoc($result))
             {
             	echo "<a href='descrip.php?title=".$row['a_title']."'><div class ='article-box' style='padding-bottom: 30px; width: 100%; background-color: white; text-align: center; box-shadow: 5px 5px 5px;'>
                  <h3> Movie Title: ".$row['a_title']." </h3>
                  <p> Summary of the movie:  ".$row['a_text']." </p>
                  <p> Release date:  ".$row['a_date']." </p>
                  <p> Actor of the movie:  ".$row['a_actor']." </p>
              </div>";

             }                                              
       	  }
       	  else
       	  {
       	  	echo "there are no results macthing your search!";
       	  }
       }
    ?>
</div>

</body></html>