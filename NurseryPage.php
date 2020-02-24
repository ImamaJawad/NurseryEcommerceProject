<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nursery Page</title>
<style>

<?php
session_start();
?>

<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PlantPlanet HomePage</title>
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<style type="text/css">

body,h1,h2,h3,h4,h5 {font-family: Signika; color: indigo;}
* {
  box-sizing: border-box;
}
  .submitbutton{
    background-color: green;
    color: white;
    border-radius: 8px;
    border-width: 0px;
    width: 100px;
    font-size: 15px;
    font-family: 'Signika', sans-serif;
  }

@media only screen and (min-width: 768px) {
  /* For tablets: */
  .col-n-0 {width: 4.165%;height: 4.165%;}
  .col-n-1 {width: 8.33%;}
  .col-n-125{width: 10.4225%;}
  .col-n-15{width: 12.495%;}
  .col-n-1625{width: 13.53625%;}
  .col-n-175{width: 14.5775%;}
  .col-n-2 {width: 16.66%;}
  .col-n-25{width: 20.8225%;}
  .col-n-3 {width: 25%;}
  .col-n-35{width: 29.165%;}
  .col-n-4 {width: 33.33%;}
  .col-n-5 {width: 41.66%;}
  .col-n-6 {width: 50%;}
  .col-n-7 {width: 58.33%;}
  .col-n-8 {width: 66.66%;}
  .col-n-9 {width: 75%;}
  .col-n-10 {width: 83.33%;}
  .col-n-11 {width: 91.66%;}
  .col-n-12 {width: 100%;}
}
@media only screen and (min-width: 300px) {
  /* For tablets: */
  .col-t-0 {width: 4.165%;}
  .col-t-1 {width: 8.33%;}
  .col-t-125{width: 10.4225%;}
  .col-t-15{width: 12.495%;}
  .col-t-1625{width: 13.53625%;}
  .col-t-175{width: 14.5775%;}
  .col-t-2 {width: 16.66%;}
  .col-t-25{width: 20.8225%;}
  .col-t-3 {width: 25%;}
  .col-t-35{width: 29.165%;}
  .col-t-4 {width: 33.33%;}
  .col-t-5 {width: 41.66%;}
  .col-t-6 {width: 50%;}
  .col-t-7 {width: 58.33%;}
  .col-t-8 {width: 66.66%;}
  .col-t-9 {width: 75%;}
  .col-t-10 {width: 83.33%;}
  .col-t-11 {width: 91.66%;}
  .col-t-12 {width: 100%;}
}

  @media only screen and (max-width: 1030px) {
  /* For tablets: */
  .col-m-0{width: 4.165%;display: none;}
  .col-m-1 {width: 8.33%;display: none;}
  .col-m-15{width: 12.495%;display: none;}
  .col-m-175{width: 14.5775%;display: none;}
  .col-m-2 {width: 16.66%;display: none;}
  .col-m-25{width: 20.8225%;display: none;}
  .col-m-3 {width: 25%;display: none;}
  .col-m-35{width: 29.165%;display: none;}
  .col-m-4 {width: 33.33%;}
  .col-m-5 {width: 41.66%;}
  .col-m-6 {width: 50%;}
  .col-m-7 {width: 58.33%;}
  .col-m-8 {width: 66.66%;}
  .col-m-9 {width: 75%;}
  .col-m-10 {width: 83.33%;}
  .col-m-11 {width: 91.66%;}
  .col-m-12 {width: 100%;}
  .two{width: 25%; display: block;}
}

@media only screen and (min-width: 1030px) {
  /* For desktop: */
  .col-0{width: 4.165%;}
  .col-1 {width: 8.33%;}
  .col-15{width: 12.495%;}
  .col-175{width: 14.5775%;}
  .col-2 {width: 16.66%;}
  .col-25{width: 20.8225%;}
  .col-3 {width: 25%;}
  .col-35{width: 29.165%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
  .two1{display: none;}
}


/* ******* step 4: clear both */
[class*="col-"] {
  float: right;
  padding-top: 20px;
}

/* ******* step 5: clear both */
.row::after {
  content: "";
  clear: both;
  display: block;
}
  .menu-position{
    position: fixed;
    display: block;
    z-index: 99;
    width: 100%;
    background-color:black;
  }
.container2 {
  width: 200px;
  clear: both;
}

.container2 input {
  width: 200px;
  clear: both;
}
#footer {
  background: #333;
  padding: 30px 0 20px;
}
#footer h3 {
  color: #1e7a46;
  font-weight: 400;
  font-size: 18px;
  text-transform: uppercase;
  margin-bottom: 20px;
}
#footer .social {
  margin: 10px 0 50px 0;
}
#footer .social ul li {
  display: inline-block;
  margin: 0 20px;
}
#footer .social i.fa {
  font-size: 22px;
  width: 40px;
  height: 40px;
  padding: 10px;
  background: #444;
  color: #6aaf08;
  border-radius: 50%;
  transition: all 0.3s;
}
#footer .social i.fa:hover {
  background: #6aaf08;
  color: #fff;
}
#footer p {
  color: #666;
  font-size: 15px;
}
#footer a {
  color: #888;
}
#footer a:hover {
  color: #ccc;
}

  .menu{
    background-color: black;
    color: white;
    float: left; 
    margin: 0px;
    text-align: center;
    font-family: Signika;
    font-size: 15px;
    border-left-color: white ;
    border-left-width: 2px;
    border-left-style: solid;

  }
  .menu:hover{
    color: green;
  }
  .two:hover {background-color: black;}

  .dropdown:hover {background-color: indigo;}
  .footer2{
    background-color: #141414;
    text-align: center;
    color: white;
    font-family: Verdana, sans-serif;
    font-size: 16px;
    width: 100%
    height: 50px;
    padding-top: 12px;
    padding-bottom: 12px;
    transform: translate(-20% 0%);
    margin-top: 0px;
  }
.dropbtn {
    color: white;
    background-color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.t {
    position: relative;
}


.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: white;
    background-color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;color: indigo;}

.dropdown:hover .dropdown-content {display: block;}
.t:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: indigo;}

  .row::after {
  content: "";
  clear: both;
  display: block;
}
.container2 {
  width: 200px;
  clear: both;
}

.container2 input {
  width: 200px;
  clear: both;
}
body{
	background-image: url("https://gallery.yopriceville.com/var/albums/Free-Clipart-Pictures/Spring-PNG/Spring_Decor_with_Leaves_PNG_Clip_Art_Image.png?m=1450497302");
	background-size: cover;
}
</style>
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;">
  <div class="container" style="width:100%;padding:0%; float:left"> 
      <div class="menu-position" style="padding-left: 0px;" align="left;">
    <div align="left" style="margin-left:-60px;padding-left: 0px;">
    <div class="menu two two1" style="border-left-style: none; float: left;padding-top: 13px;margin-right: 0px;padding-right: 0px;margin-left: -30px;padding-left: 0px;"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" style="border-left-style: none;float: left;text-align: left; vertical-align: center;padding-top: 15px;margin-left: 0px;padding-left: 0px;"><h3 style="font-family: ubuntu ;color: white;display: inline; padding-bottom: 4px;">Plant </h3><h3 style="font-family: ubuntu ;color: blue; font-style: bold;display: inline; padding-bottom: 04px;">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none; float: left;padding-left: 0px;padding-top: 0px;"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none;padding-left: 0px;"><b style="width: 100%;border-left-style: none;padding-left: 0px;"><a href="HomePage.php" style="color: white;">HOME</a></b></div>
<div class="menu col-15 col-m-15 col-n-2"><b style="width: 100%;"><a href="plantsMain (1).php" style="color: white;">PLANTS</a></b></div> 
  <div class="menu col-25 col-m-25 col-n-5"><b style="width: 100%;"><a href=HomePage.php?#Seasonal" style="color: white;">SEASONAL</a></b></div>
          <div class="menu col-1 col-m-1 col-n-15"><b style="width: 100%;"><a href="ToolPage.php" style="color: white;">TOOLS</a></b></div>
  <div class="menu col-1 col-m-1 col-n-15"><b style="width: 100%;"><a href="TipsPage.php" style="color: white;">TIPS</a></b></div>
 <div class="menu col-15 col-m-15 col-n-3"><b style="width: 100%;"><a href="NurseryPage.php" style="color: white;">NURSERIES</a></b></div>

  <div class="menu col-15 col-m-15 col-n-3"  ><b style="width: 100%;"><a href="SignUpForm.php" style="color: white;">SIGN UP</a></b></div>



  <?php

        if(isset($_SESSION['t3'])){
          if(isset($_GET['r'])){
session_destroy();echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';}
else{
  echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href="cart.php" style="color: white;">CART</a></b>
<div class="dropdown-content">
    <a href="cart.php" style="color: white;">View Cart</a><a href="logout.php" style="color: white;">Log Out</a>
  </div>
        </div>';
}
 
      }
      else if(isset($_SESSION['r1'])){
        if(isset($_GET['ret'])){
        $re=$_GET['ret'];}
        $r1=$_SESSION['r1'];
        if($r1==="Administrator"){echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"admin.php?ret='.$re.'" style="color: white;">ADMIN</a></b>
<div class="dropdown-content">
    <a href='.'"admin.php?ret='.$re.'">Editations</a>
    <a href="logout.php">Log Out</a>
  </div>
        </div>';}
          else{if(isset($_GET['re'])){
        $re=$_GET['re'];}

        echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"retailer.php?ret='.$re.'" style="color: white;">RETAILER</a></b>
<div class="dropdown-content">
    <a href='.'"retailer.php?ret='.$re.'">Account</a>
    <a href="logout.php">Log Out</a>
  </div>
        </div>';}
        if(isset($_GET['r'])){
session_destroy();echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';}
      }
     else{
         
    
          echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';
        }
            //display cart
?>

   <div class="menu two two1 dropdown" style="float: right;border-left-style: none;margin-right:0px;padding-top: 0px;"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
  <div class="dropdown-content">
    <a href="HomePage.php" style="color: white;">HOME</a>
    <a href="PlantsMain (1).php" style="color: white;">PLANTS</a>
    <a href="HomePage.php?#Seasonal" style="color: white;">SEASONAL PICKS</a>
    <a href="ToolPage.php" style="color: white;">TOOLS</a>
    <a href="TipsPage.php" style="color: white;">TIPS</a>
    <a href="SignUpForm.php" style="color: white;">SIGN UP</a>
    <a href="NurseryPage" style="color: white;">NURSERIES</a>
    <a href="logout.php" style="color: white;">LOGOUT</a>

  </div>
</div>
<div class="menu two two1" style="border-left-style: none; float: right;padding-top: 17px;padding-bottom: 0px;"><a href="SignUpForm.php"><div style="float: right;padding-right: 22px;" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  style="background-color: black;border-radius:50%;border: 1px solid white;"></div><br><div style="clear: right; float: right;"><a href="SignUpForm.php" style="color: white;">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
<div class="jumbotron" style="background-color: #9DB68C; opacity: 0.9;">
  <div class="overlay container row col-md-8 col-md-offset-2" style="margin-left: 0px">
   <h2 style="font-size: 120px; font-family:DejaVu Sans,DejaVu Sans Mac Name,DejaVu Sans Unix Name,Times New Roman; font-style: italic ;text-align: left;margin-left: 0px; color: white">Plant Nurseries</h2><br>
  </div>     
  <p style="clear: left; margin-left: 20px; color: white;font-family: 'Alegreya Sans SC';font-size: 26px; color: #585858; font-weight: bold">B r o w s e&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;t h r o u g h&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;y o u r&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f a v o u r i t e&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;c o l l e c t i o n&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;o f&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;p l a n t&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;n u r s e r i e s !&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
</div>

  <div style="margin-top:4%; margin-left: 8%; margin-right: 4%; float:left; background-color: white; border-radius: 4%; margin-bottom: 40px">
    <img src="http://sunvalleyomaha.com/wp-content/uploads/2016/01/plant-nursery.jpg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left style="border: 1px solid green">
    <div style="width:300px; height:150px; text-align: center; box-shadow: 3px solid black; border: 1px solid green; border-radius: 4%" >
    	            <div style="font-size: 25px; text-align: center; font-family: sans-serif;">
    	            	Hill House Nursery & <br> Plant Care<br><br>
    	            </div>
					<button type="button" class="btn btn-info" style="background-color: green" onclick="location.href='NurseryOne.php'">Visit This Nursery</button>
	</div>
  </div>
  <div style="margin-top:4%; margin-left: 4%; margin-right: 4%; float:left; background-color: white; border-radius: 4%; margin-bottom: 40px">
    <img src="https://www.whatsuplife.in/noida/blog/wp-content/uploads/2017/04/Verma-Nursery.jpg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left style="border: 1px solid green">
    <div style="width:300px; height:150px; text-align: center; box-shadow: 3px solid black; border: 1px solid green; border-radius: 4%" >
    	            <div style="font-size: 25px; text-align: center; font-family: sans-serif;">
    	            	Richard's Plant Home & Nursery<br><br>
    	            </div>
					<button type="button" class="btn btn-info" style="background-color: green" onclick="location.href='NurseryTwo.php'">Visit This Nursery</button>
	</div>
  </div>

  <div style="margin-top:4%;margin-left: 4%; margin-right: 4%; float:left; background-color: white; border-radius: 4%; margin-bottom: 40px">
    <img src="http://moland.org/wp-content/uploads/2012/06/Native-Garden-1.jpg" width="300px" height="200px" class="img-thumbnail" position=absolute float=left style="border: 1px solid green">
    <div style="width:300px; height:150px; text-align: center; box-shadow: 3px solid black; border: 1px solid green; border-radius: 4%" >
    	            <div style="font-size: 25px; text-align: center; font-family: sans-serif;">
    	            	Golden Plant Care Nursery<br><br>
    	            </div>
					<button type="button" class="btn btn-info" style="background-color: green" onclick="location.href='NurseryThree.php'">Visit This Nursery</button>
	</div>
  </div>
  <div style="margin-left: 8%; margin-right: 8%; float:left; background-color: white; border-radius: 4%; margin-bottom: 40px">
    <img src="http://kopacznurseryflorist.com/wp-content/uploads/2013/12/June-Nursery-Pictures-014.jpg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left style="border: 1px solid green">
    <div style="width:300px; height:150px; text-align: center; box-shadow: 3px solid black; border: 1px solid green; border-radius: 4%" >
    	            <div style="font-size: 25px; text-align: center; font-family: sans-serif;">
    	            	Johnson's And John's Nursery<br><br>
    	            </div>
					<button type="button" class="btn btn-info" style="background-color: green" onclick="location.href='NurseryFour.php'">Visit This Nursery</button>
	</div>
  </div>

    <div style="margin-left: 0%; margin-right: 4%; float:left; background-color: white; border-radius: 4%; margin-bottom: 40px">
    <img src="https://akjabroad2012.files.wordpress.com/2012/03/uplimg_2343.jpg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left style="border: 1px solid green">
    <div style="width:300px; height:150px; text-align: center; box-shadow: 3px solid black; border: 1px solid green; border-radius: 4%" >
    	            <div style="font-size: 25px; text-align: center; font-family: sans-serif;">
    	            	The Norton Plant Place<br> & Compound<br><br>
    	            </div>
					<button type="button" class="btn btn-info" style="background-color: green" onclick="location.href='NurseryFive.php'">Visit This Nursery</button>
	</div>
  </div>

 </div>
</body>
</html>