<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nursery Four</title>
<style>
  .row::after {
  content: "";
  clear: both;
  display: block;
}
.container2 {
  width: 200px;
  clear: both;
}
table{
  margin-left: 80px;
  padding-left: 10px;
  text-align: center;
  height: 120px;
  max-width: 70px;
}
table tr,td{
  border: 1px solid grey;
  text-align: center;
  padding: 2px;

}
table th{
  text-align: center;
  font-size: 20px;
  padding: 25px;
}

.finput{
  height: 100%;
  width: 95%;
}
.container2 input {
  width: 200px;
  clear: both;
}
#slideshow {
  margin: 80px auto;
  position: relative;
  width: 600px;
  height: 300px;
  padding: 10px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.4);
}

#slideshow > div {
  position: absolute;
  background-color: grey;
  top: 10px;
  left: 10px;
  right: 10px;
  bottom: 10px;
}

body{
  background-image: url("");
  background-size: cover;
}


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


</style>
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href='https://fonts.googleapis.com/css?family=Gruppo' rel='stylesheet'>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;">
  <div class="container" style="width:100%;padding:0%; float:left"> 
      <div class="menu-position" style="padding-left: 0px;" align="left;">
    <div align="left" style="margin-left:-60px;padding-left: 0px;">
    <div class="menu two two1" style="border-left-style: none; float: left;padding-top: 13px;margin-right: 0px;padding-right: 0px;margin-left: -30px;padding-left: 0px;"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" style="border-left-style: none;float: left;text-align: left; vertical-align: center;padding-top: 15px;margin-left: 0px;padding-left: 0px;"><h3 style="font-family: ubuntu ;color: white;display: inline; padding-bottom: 4px;">Plant </h3><h3 style="font-family: ubuntu ;color: blue; font-style: bold;display: inline; padding-bottom: 04px;">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none; float: left;padding-left: 0px;padding-top: 0px;"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" style="border-left-style: none;padding-left: 0px;"><b style="width: 100%;border-left-style: none;padding-left: 0px;"><a href="HomePage.php" style="color: white;">HOME</a></b></div><?php

          if(isset($_SESSION['t3'])){
            if(isset($_GET['r'])){
            session_destroy();echo ' <div class="menu col-15 cm-15 col-n-2"><b id="b_eaea_1"><a href="plantsMain (1).php" id="a_eaea_1">PLANTS</a></b></div> ';
          }
            else{
            echo '<div class="menu col-15 cm-15 col-n-2"><b id="b_eaea_1"><a href="plantsMain (1).php" id="a_eaea_1">PLANTS</a></b></div> ';
          }
 
        }
        else if(isset($_SESSION['r1'])){
          if(isset($_GET['ret'])){
          $re=$_GET['ret'];}
          $r1=$_SESSION['r1'];
          if($r1==="Administrator"){echo ' <div class="menu col-15 cm-15 col-n-2"><b id="b_eaea_1"><a href="HomePage.php" id="a_eaea_1">PLANTS</a></b></div> ';}
          else{
            if(isset($_GET['re'])){
            $re=$_GET['re'];}

            echo '<div class="menu col-15 cm-15 col-n-2"><b id="b_eaea_1"><a href="HomePage.php" id="a_eaea_1">PLANTS</a></b></div> ';}
            if(isset($_GET['r'])){
            session_destroy();echo '<div class="menu col-15 cm-15 col-n-2"><b id="b_eaea_1"><a href="plantsMain (1).php" id="a_eaea_1">PLANTS</a></b></div> ';}
          }
          else{
         
    
          echo '<div class="menu col-15 cm-15 col-n-2"><b id="b_eaea_1"><a href="plantsMain (1).php" id="a_eaea_1">PLANTS</a></b></div>';
           }
            //display cart
?>
          <div class="menu col-25 col-m-25 col-n-5"><b id="b_8ec7_2"><a href="HomePage.php?#Seasonal" id="a_8ec7_2">SEASONAL</a></b></div>
          <div class="menu col-1 col-m-1 col-n-15"><b id="b_8ec7_3"><a href="ToolPage.php" id="a_8ec7_3">TOOLS</a></b></div>
          <div class="menu col-1 col-m-1 col-n-15"><b id="b_8ec7_4"><a href="TipsPage.php" id="a_8ec7_4">TIPS</a></b></div>


        <?php

        if(isset($_SESSION['t3'])){
          if(isset($_GET['r'])){
          session_destroy();echo ' <div class="menu col-15 cm-15 col-n-3"><b id="b_eaea_5"><a href="NurseryPage.php" id="a_eaea_5">NURSERIES</a></b></div>';}
          else{
            echo '<div class="menu col-15 cm-15 col-n-3"><b id="b_eaea_5"><a href="NurseryPage.php" id="a_eaea_5">NURSERIES</a></b></div>';
            }
 
        }
        else if(isset($_SESSION['r1'])){
          if(isset($_GET['ret'])){
          $re=$_GET['ret'];}
          $r1=$_SESSION['r1'];
          if($r1==="Administrator"){echo ' <div class="menu col-15 cm-15 col-n-3"><b id="b_eaea_5"><a href="HomePage.php" id="a_eaea_5">NURSERIES</a></b></div>';}
          else{if(isset($_GET['re'])){
          $re=$_GET['re'];}

          echo '<div class="menu col-15 cm-15 col-n-3"><b id="b_eaea_5"><a href="HomePage.php" id="a_eaea_5">NURSERIES</a></b></div>';}
          if(isset($_GET['r'])){
          session_destroy();echo '<div class="menu col-15 cm-15 col-n-3"><b id="b_eaea_5"><a href="NurseryPage.php" id="a_eaea_5">NURSERIES</a></b></div>';}
        }
        else{
         
    
        echo '<div class="menu col-15 cm-15 col-n-3"><b id="b_eaea_5"><a href="NurseryPage.php" id="a_eaea_5">NURSERIES</a></b></div>';
        }
            //display cart
        ?>
          
        <div class="menu col-15 col-m-15 col-n-3"  ><b id="b_8ec7_6"><a href="SignUpForm.php" id="a_8ec7_6">SIGN UP</a></b></div>
        <?php
          //logged in as customer
          if(isset($_SESSION['t3'])){
          //logout pressed.. redirecting to homepage
            if(isset($_GET['r'])){
              session_destroy();
              echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';
            }  
            //show cart    
            else{
              echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href="cart.php" style="color: white;">CART</a></b>
              <div class="dropdown-content">
              <a href="cart.php" style="color: white;">View Cart</a><a href="logout.php" style="color: white;">Log Out</a>
              </div>
              </div>';
            }
          }
          //logged in as retailer or admin
          else if(isset($_SESSION['r1'])){
            if(isset($_GET['r'])){
              session_destroy();
              echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="color: white;">SIGN IN</a></b></div>';
            }  
            else{
              $r1=$_SESSION['r1'];
              $re=$_SESSION['r1'];
              //as admin..isset used if we try and go to homepage wot links..session set but ret not in url
              if(isset($_GET['ret'])){
                $re=$_GET['ret'];
              }
              //admin
              if($r1==="Administrator"){
                echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"admin.php?ret='.$re.'" style="color: white;">ADMIN</a></b>
                <div class="dropdown-content">
                <a href='.'"admin.php?ret='.$re.'">Editations</a>
                <a href="logout.php">Log Out</a>
                </div>
                </div>';
              }
              //retailer
              else{
              //as retailer..isset used if we try and go to homepage wot links..session set but re not in url
                if(isset($_GET['re']))
                {
                  $re=$_GET['re'];
                }
                echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"retailer.php?ret='.$re.'" style="color: white;">RETAILER</a></b>
                <div class="dropdown-content">
                <a href='.'"retailer.php?ret='.$re.'">Account</a>
                <a href="logout.php">Log Out</a>
                </div>
                </div>';
              }
            }
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
<header id="header">
  <div class="menu two two1" style="border-left-style: none; float: right;padding-bottom: 0px;"><a href="#"><div style="float: right;padding-right: 22px;" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  style="background-color: black;border-radius:50%;border: 1px solid white;"></div><br><div style="clear: right; float: right;"><a href="#">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
<div class="jumbotron layer" style="background-color:#F8F8FF;max-height: 150px;">
  <div class="overlay container row col-md-8 col-md-offset-2" style="margin-left: 0px">
   <h2 style="font-size: 50px; font-family: 'Gruppo';text-align: left;margin-left: 0px;padding-bottom: 60px; color:#66CC66">Johnson's And John's Nursery</h2><br>
  </div>  
  <p style="margin-bottom: 0px; margin-top: 20px">
<i class="fa fa-twitter" style="color: #66CC66; font-size: 25px; border: 2px double #66CC66; margin-left: 160px; padding-bottom: 0px"></i>        
<i class="fa fa-facebook" style="color:#66CC66; font-size: 25px; padding-left: 5px; padding-right: 5px; border: 2px double #66CC66; margin-left: 20px; padding-bottom: 0px;"></i>       
<i class="fa fa-flickr" style="color: #66CC66; font-size: 25px; border: 2px double #66CC66; padding-left: 2px; padding-right: 2px;margin-left: 20px; padding-bottom: 0px"></i> 
<i class="fa fa-instagram" style="color: #66CC66; font-size: 25px; border: 2px double #66CC66;  padding-left: 2px; padding-right: 2px; margin-left: 20px; padding-bottom: 0px"></i>  
      </p> 
<div id="backdrop" style="margin-top: 0px;background: url(css/WebsiteImages/overlay-green.jpg) fixed rgba(39,62,84,0.82);max-width: 100%">
  <div id="slideshow">
   <div>
     <img src="css/WebsiteImages/n4.jpg" style="opacity:0.7" height=300 width=600>
   </div>
   <div>
     <img src="css/WebsiteImages/n7.jpg" style="opacity:0.7" height=300 width=600>
   </div>
   <div>
     <img src="css/WebsiteImages/n2.jpg" style="opacity:0.7" height=300 width=600>
   </div>
   <div>
     <img src="css/WebsiteImages/n1.jpg" style="opacity:0.7" height=300 width=600>
   </div> 
</div>
</div>
<script type="text/javascript">
  $("#slideshow > div:gt(0)").hide();
setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
}, 3000);
</script>

<center>
  <div style="align-self: center;background-color: #99FF99;padding-top:-7px; background-size: cover;">
      <h2 style="font-size: 40px; font-family: 'Gruppo'">Our New Variety</h2>
      <hr style="background-color: #66CC66">
   
    <div class="image2" style="width:25vw; height: 25vw; margin-right: 0.2vw">
      <img src="css/ProductImages/car.jpg" width="60%" height="60%" style="border-radius: 50%; border: 4px solid #66CC66; opacity: 0.87"><b><h1 style="font-size: 1.5vw;">Pink<br>Carnation</h1></b> 
    </div>
    <div class="image2"style="width:25vw; height: 25vw; margin-right: 0.2vw">
      <img src="css/ProductImages/pruner.jpg" width="60%" height="60%" style="border-radius: 50%; border: 4px solid #66CC66; opacity: 0.87"><b><h1 style="font-size: 1.5vw;">Garden<br>Pruner</h1></b> 
    </div>
    <div class="image2" style="width:25vw; height: 25vw; margin-right: 0.2vw">
      <img src="css/ProductImages/trowel.jpg" width="60%" height="60%" style="border-radius: 50%; border: 4px solid #66CC66; opacity: 0.87"><b><h1 style="font-size: 1.5vw;">Garden<br>Trowel</h1></b> 
    </div>
    <br><br>
  </div>
  </center>

  <div style="margin-top:2%; margin-left: 2%; margin-right: 4%; float:left; background-color: white; border-radius: 4%; margin-bottom: 40px">
    <img src="http://sunvalleyomaha.com/wp-content/uploads/2016/01/plant-nursery.jpg" width="500px" height="800px" class="img-thumbnail" position=absolute float=left style="border: 1px solid #66CC66; opacity: 0.9">
    <div style="width:500px; height:650px; text-align: center; box-shadow: 3px solid black; border-radius: 4%" >
                  <div style="font-size: 30px; text-align: center; font-family: 'Gruppo'; padding:5px">
                    <h1>Introduction</h1>
                    <p style="text-align: justify; font-size: 20px; color: black;margin-bottom: 4px">How can we help you grow your garden?

Whether you prefer an easy, low maintenance garden or large formal garden, you will find the perfect plants from our extensive selections that will help you create a garden to love.I grew up working with plants in my parents’ nursery. By the time, Steve and I started Hill House Nursery; I had a long history of planting and caring for plants. As a business owner, wife and mom, I just don’t have time for extensive gardening. Plants that make it into my garden must be extremely talented. Multi-seasonal plants are my favorites such as flowering evergreen perennials, herbs, ornamental grasses, shrubs and small trees with interesting branching structure and long cross over season blooms. Oh…and strawberry plants.

Finding the right plants needn’t be a daunting task. From traditional favorites to new hybrids, we search out the best plants for landscaping and gardening projects. As always, we’re here to help.

Cheryl Jones, President

Hill House Nursery And Plant Care Inc.</p>
                  </div>
  </div>
  </div>
  <div style="margin-top:2%; margin-left: 2%; margin-right: 4%; float:left; background-color: white; border-radius: 4%; margin-bottom: 40px">
    <div style="width:600px; height:650px; text-align: center; box-shadow: 3px solid black; border-radius: 4%" >
                  <div style="font-size: 20px; text-align: center; font-family: 'Gruppo';padding:5px">
                    <h1 style="color: #66CC66; font-size: 45px; padding-left: 50px; font-weight: bold">Available Products<br> In This Nursery</h1><br>
                    <p style="text-align: justify; font-size: 120px; color: black;margin-bottom: 4px">
        <?php
        $db=mysqli_connect('localhost','root','','new');
        if(!$db){
          die("Connection failed" . mysqli_connect_error());
        }
        $sql="SELECT * FROM addition inner join product on addition.Pid=product.Pid WHERE NId=4";
        //$sql="SELECT Pid FROM Addition";
        $results=mysqli_query($db,$sql);
          //var_dump($results);
          
          echo " <table><tr><th> Product Name</th><th> Stock Available</th><th> Price Per Item</th><th>Quantity Ordered</th></tr>";
          while($row = mysqli_fetch_array($results)){  
          echo "<tr><td>" . $row['Pname'] . "</td><td>" . $row['Quantity'] ."</td><td>". $row['Price'] ."</td>";  
          echo"<td><form action='addtocart.php'>
<input type='hidden' class='finput' name='Addid' value='".$row['AddId']."'>
<input type='number' class='finput' name='quantity' value='quantity'>
          <input type='submit' name='b' height=10 value='Add to Cart'>
          </form></td></tr>";

}

echo "</table>"; 
        mysqli_close($db);
        ?>
       </p>
  </div>
  </div>
  </div>
  <div id="footer" class="container text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;">
  <center>
  <div style="clear:right;color: white;"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>
<form><center><h1 style="color: gray;">DROP US A MESSAGE</h1>
  <div class="container" style="color: gray;">
      
First Name:<br><input type="text" name="t1"><br><br>
              Last Name:<br><input type="text" name="t2"/><br><br>
              Email Address:<sup>*</sup><br><input type="Email" name="e1" placeholder="required"/><br><br>
              Message:<br><input type="text" name="t2"><br><br>
  </div>
</center>
<center>
<input type="submit" name="b1" value="Send Message" class="submitbutton"><br></center></form>
   
    </div>
</body>
</html>