<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8" name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<head>
	<title>Home page</title>
	<script>
		function search() { 
    let input = document.getElementById('searchbar').value 
    input=input.toLowerCase(); 
    let x = document.getElementsByClassName('hihhi'); 
      
    for (i = 0; i < x.length; i++) {  
        if (!x[i].innerHTML.toLowerCase().includes(input)) { 
            x[i].style.display="none"; 
        } 
        else { 
            x[i].style.display="list-item";                  
        } 
    } 
} 
	</script>
	<style>
		body{
			font-family: Arial, Helvetica, sans-serif;
			background-image:url("image/background.png");
			background-repeat: no-repeat;
		    background-size: 100% 100%;
		    }

		.navbar{
			width: 100%
			background-color: #002343;
			overflow: auto;


		}

		.navbar a{
			float: left;
			padding: 12px;
			color: pink;
			text-decoration: none;
			font-size: 17px;
			border-radius: 0%;
		}

		.navbar a:hover{
			background-color: red;
		}

		.active{
			background-color: black;
		}

		@media screen and (max-width: 500px)
		{
			.navbar a{
				float: none;
				display: block;
			}
		}

		img:hover {

		  transform: scale(1.2);
		}
		

		footer{
			width: 100%;
			height: 100px;
			background: #00003E;
         }

		.fa {
  padding: 2px;
  font-size: 25px;
  width: 25px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  border-radius:50%
}

.fa:hover {
    opacity: 0.7;
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}

.fa-linkedin {
  background: #007bb5;
  color: white;
}

.fa-youtube {
  background: #bb0000;
  color: white;
}

.fa-instagram {
  background: #125688;
  color: white;
}

.fa-pinterest {
  background: #cb2027;
  color: white;
}


#searchbar{ 
     margin-left: 15%; 
     padding:15px; 
     border-radius: 10px; 
   } 
 
   input[type=text] { 
      width: 30%; 
      -webkit-transition: width 0.15s ease-in-out; 
      transition: width 0.15s ease-in-out; 
   } 
 
   /* When the input field gets focus, 
        change its width to 100% */
   input[type=text]:focus { 
     width: 66%; 
     background-color: lavender;
   } 
 

   button{
    width: 106px;
    height: 46px;
    font-size: 18px;
    background-color: lavenderblush;
   cursor: pointer;
   }
   button:hover{
    background-color: lavender;
    
   }
  #list{ 
    font-size:  1.5em; 
    margin-left: 90px; 
   } 
 
.hihhi{ 
   display: list-item;     
  }  



		
	</style>
</head>
<body>

<div class="navbar">

	
	<a class="active" href="#">MOVIES</a>
	<a href="#">TV SHOWS</a>
	<a href="#" onclick="fun4()">PEOPLE</a>
    <a href="#" onclick="fun4()">DISCOVER</a>

    <a href="#" style="margin-left: 1100px; margin-top: -44px;">SIGNIN/REGISTER</a>
	</div>
	<br>
<form action="search.php" method="POST">
    <input id="searchbar" type="text"
        name="search" placeholder="Search.."> 
        <button type="submit" name="submit-search">SEARCH</button>
    </form>  
   
 


<div class="container-fluid">
    <div class="row">
    	<div class="col-md-2"></div>
            <div class="col-md-6" style="background-color: black; height: 1370px; width: 900px; margin-left: 250px; margin-top: 50px; box-shadow: 
            6px 6px 6px 6px BLACK;">
             

             <video width="294" height="280" controls title="toystory4"> <source src="video/toystory4.mov" type="video/mp4">
             <source src="movie.ogg" type="video/ogg"></video>
              <video width="295" height="280" controls title="alladin"> <source src="video/aladdin.mov" type="video/mp4">
             <source src="movie.ogg" type="video/ogg"></video>
           
              <video width="300" height="280" controls title="thelittle"> <source src="video/thelittle.mov" type="video/mp4">
             <source src="movie.ogg" type="video/ogg"></video>

            

            <img src="image/spiderr.jpg" title="spiderman" class="im1" style="height: 280px; width: 300px; margin-left: 8px; margin-top: 4px; "  >
            <img src="image/xmen.jpg" title="xmen"class="im1" style="height: 280px; width: 300px; margin-top: 4px; " >
            <img src="image/kabir.jpg" title="kabir singh"class="im1" style="height: 280px; width: 280px; margin-top: 4px; " >

            <img src="image/upside.jpg" title="upside"class="im1" style="height: 280px; width: 300px; margin-left: 8px; margin-top: 4px;" >
            <img src="image/robin.jpg" title="robin"class="im1" style="height: 280px; width: 300px; margin-top: 4px; " >
            <img src="image/robot.jpeg" title="robot" class="im1" style="height: 280px; width: 280px; margin-top: 4px; ">
             <br>
             <video width="550" height="380" controls style="margin-top: 2px; border-color: red;"> <source src="video/thelittle.mov" type="video/mp4">
             <source src="movie.ogg" type="video/ogg"></video>
             	<div style="width: 330px; height: 380px; background-color: gray; margin-top: -385px; margin-left: 570px; box-shadow: 4px 4px 4px blue;">
             		<h3 style="margin-top: 3px; margin-left: 3px; color: white;">Most Anticipated Indian Movies and Shows</h3>

             		<br><br><br>
             		<p style="text-align: center;">Unable to load data at the moment. Please try again by reloading the page.</p>

             	</div>
              <h3><a href="#" style="text-decoration: none; color: white;">'TOYSTORY4' Cast Share children's Movie Obsessions</a></h3>
            </div>
            <div class="col-md-3"></div>
	
</div>


<footer>

	<div style=" margin-left: 500px; margin-top: 0px;"><a href="#" class="fa fa-facebook"></a>
<a href="#" class="fa fa-twitter"></a>
<a href="#" class="fa fa-google"></a>
<a href="#" class="fa fa-linkedin"></a>
<a href="#" class="fa fa-youtube"></a>
<a href="#" class="fa fa-instagram"></a>
<a href="#" class="fa fa-pinterest"></a>
</div>
	
</footer>


</body>
</html>