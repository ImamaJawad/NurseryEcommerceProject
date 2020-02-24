<!DOCTYPE html>
<html>
<head>
  <title>SignIn</title>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
  <style>
 body,h1,h2,h3,h4,h5 {font-family: sans-serif; color: indigo;}
* {
  box-sizing: border-box;
}

/* ******* step 3: box sizing */

/* For mobile phones: */
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

.dropdown:hover .dropbtn {background-color: indigo;}
  .footer2{
    background-color: #141414;
    text-align: center;
    color: white;
    font-family: 'Signika', sans-serif;
    font-size: 16px;
    width: 100%
    height: 50px;
    padding-top: 12px;
    padding-bottom: 12px;
    transform: translate(-20% 0%);
    margin-top: 0px;
  }
  .center{
    display:block;
    margin-left:auto;
    margin-right: auto;
    padding: 50px;
  }
  .first{
    background-image: url("http://www.hdfondos.eu/preview/get_photo/176229/1920/1080");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
  }

  .text{
    color: black;
    font-size: 15px;
    font-family: 'Signika', sans-serif;
  }
  .loginbutton{
    background-color: green;
    color: white;
    border-radius: 8px;
    border-width: 0px;
    width: 200px;
    height: 40px;
    font-size: 15px;
    font-family: 'Signika', sans-serif;
  }
  .container {
    width: 455px;
    height: 100px;
  }

  .container input {
    width: 300px;
    height: 40px;

  }
  input {
    width: 300px;
    height: 40px;
  }
  section{
    box-sizing: border-box;
    margin: auto;
    margin-top: 80px;
    border-style: solid;
    border-width: 3px;
    background-color: rgba(255, 255, 255, 0.3);
    width: 450px;
    padding-left: 15px;
    height: 470px;
  }
</style>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="first" id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;">
  <div class="container" style="width:100%;padding:0%; float:left"> 
      <div class="menu-position" style="padding-left: 0px;" align="left;">
    <div align="left" style="margin-left:-60px;padding-left: 0px;">
    <div class="menu two two1" style="border-left-style: none; float: left;padding-top: 13px;margin-right: 0px;padding-right: 0px;margin-left: -30px;padding-left: 0px;"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" style="border-left-style: none;float: left;text-align: left; vertical-align: center;padding-top: 15px;margin-left: 0px;padding-left: 0px;"><h3 style="font-family: ubuntu ;color: white;display: inline; padding-bottom: 4px;">Plant </h3><h3 style="font-family: ubuntu ;color: blue; font-style: bold;display: inline; padding-bottom: 04px;">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none; float: left;padding-left: 0px;padding-top: 0px;"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none;padding-left: 0px;"><b style="width: 100%;border-left-style: none;padding-left: 0px;"><a href="HomePage.php" style="color: white;">HOME</a></b></div>
<div class="menu col-15 col-m-15 col-n-2"><b style="width: 100%;"><a href="plantsMain (1).php" style="color: white;">PLANTS</a></b></div> 
  <div class="menu col-25 col-m-25 col-n-5"><b style="width: 100%;"><a href="HomePage.php?#Seasonal" style="color: white;">SEASONAL</a></b></div>
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
</nav>.

<?php
if(isset($_GET['count'])){
    $c=$_GET['count'];
    if($c>0){echo '<script>
      $(document).ready(function(){alert("Please enter valid id and password");
      })</script>';}
    if($c<0){
      echo '<script>
      $(document).ready(function(){alert("Please login before purchasing");
      })</script>';
    }
}
?>


  <section>
  <div class="text">
    <div style="clear:right; font-size: 30px; text-align: center;"> <h1>LOG IN</h1> </div>
    <form method="POST" action="task2.php">
      <div class="container">
        <div class="form-group">
        <label>User ID</label><sup>*</sup><input type="text" name="t3" placeholder="required" style="margin-left: 59px; margin-right: 40px; margin-top: 15px; margin-bottom: 15px;">
      </div>  
      <div class="form-group">  
        <label>Password</label><sup>*</sup><input type="Password" name="p1" placeholder="required" style="margin-left: 45px; margin-right: 15px; margin-top: 15px; margin-bottom: 15px;"> 
      </div>
  
      <label style="margin-left: 70px; margin-top: 80px;">Customer<input type="radio" name="r1" value="Customer"style="width: 15px;  height: 15px;">
    <label>Retailer</label><input type="radio" name="r1" value="Retailer" style="width: 15px;  height: 15px;"><label>Administrator</label><input type="radio" name="r1" value="Administrator" style="width: 15px;  height: 15px;"> </label>
</div>
       <div style="margin-top: 80px; margin-bottom: 30px;">
        <label>
          <input type="checkbox" checked="checked" name="remember" style="width: 15px; height: 15px; margin-left: 140px;"> Remember me
        </label>
      </div>
      <div  style="margin-top: 15px; margin-bottom: 15px;">
        <button type="submit" name="b1" value="LOG IN" onclick="check()" class="loginbutton" style="margin: auto; display: block;">LOG IN</button>
      </div>
      <div style="margin-top: 15px; margin-bottom: 15px;">
        <span class="psw">Forgot <a href="#">password?</a></span>
      </div>

      </form>
    </div>
  </div>
  </section>
  <br>
<br>
<br>
<div id="footer" class="container2 text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;position: absolute;left: 0px;">
  <center>
  <div style="clear:right;color: white;"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>
<form><center><h1 style="color: gray;">DROP US A MESSAGE</h1>
  <div class="container2" style="color: gray;">
      
First Name:<br><input type="text" name="t1"><br><br>
              Last Name:<br><input type="text" name="t2"/><br><br>
              Email Address:<sup>*</sup><input type="Email" name="e1" placeholder="required"/><br><br>
              Message:<br><input type="text" name="t2"><br><br>
  </div>
</center>
<center>
<input type="submit" name="b1" value="Send Message" class="submitbutton"><br></center></form>
   
    </div>


    </body>
    </html>