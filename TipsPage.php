<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>PlantPlanet HomePage</title>
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<style>
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
html {
  font-family: Signika;
}
.header {
  background-color: #FF3399;
  color: #ffffff;
  padding: 5px;
}
 
.right{
    float: right;
    font-family: "Arial", San-serif;
    font-size: 20px;
    color: #C0C0C0

  }

.aside {
  background-color: #99FFCC;
  
  padding: 10px;
  color: #ffffff;
  text-align: center;
  font-size: 14px;
  box-shadow: 0 15px 15px rgba(0,0,0,0.12), 0 15px 15px rgba(0,0,0,0.24);
}

a:hover{
  padding: 5px;
}

.center{
  display:block;
  margin-left:auto;
  margin-right: auto;
  padding: 50px;
}
.first{
  background-image:url("http://yesofcorsa.com/wp-content/uploads/2017/11/Dew-Desktop-Wallpaper.jpg");
    background-blend-mode: luminosity;
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
    text-align: center;
    
}

</style>
</head><body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
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
<br><br><br>
<header id="header">
  <div class="intro">
          <div class="col-md-8 col-md-offset-2" style="background-image: linear-gradient(lightgreen, white); width:100%; margin-left: 0px">
            <h1 style="font-size: 100px; padding-top: 8%; font-family: sans-serif;text-align: center; color:lightgreen">TIPS FOR PLANT CARE</h1>
            </div>
        </div>
      </div>
  </div> 
</header>
    <section>
      <div class="tips" style="border-style: solid; border-color: green;margin:20px;border-radius: 25px;text-align: justify; padding: 30px">
        <table>
          <tr>
            <td>
              <h1>TIP 01:</h1>
              <p>When planting a tree that has been in the nursery for any period of time, it is very important to ensure that your tree has an abundance of water before, during and after planting. This may be more difficult in the summer. A root-bound or dry tree will not absorb water quickly. Fill the planting hole with water with the tree inside before back-filling with soil. In the fall or winter it may not be as important if the ground is saturated or damp.</p>
            </td>
            <td style="width: 200px; height: 180px;">
              <img src="http://www.eadt.co.uk/polopoly_fs/1.5538673.1527599221!/image/image.jpg_gen/derivatives/landscape_630/image.jpg" width="100%" height="100%" style="border-radius: 50%; border:1px solid maroon;">
            </td>
          </tr>
        </table>        
      </div>
      <div class="tips" style="border-style: solid;border-color: green; margin:20px;padding:30px;border-radius: 25px;">
        <table>
          <tr>
            <td>
              <h1>TIP 02:</h1>
              <p>When planting in the fall, you can apply a fertilizer higher in potassium for root growth. It is important to give your tree less nitrogen at this time because you do not want new leaf growth during frost. If planting in the spring, a fertilizer slightly higher in nitrogen is good to promote new growth in roots, flowers, leaves and stems. Apply on the top of the soil around drip line or apply during the back-filling process by filling half of the hole with soil, adding the fertilizer and adding the remaining soil. Roots usually stay in the top two feet of the soil because they need oxygen.</p>
            </td>
            <td style="width: 200px; height: 180px;">
              <img src="https://www.organicfacts.net/wp-content/uploads/organicfertilizers.jpg" width="100%" height="100%" style="border-radius: 50%; border:1px solid maroon;">
            </td>
          </tr>
        </table>        
      </div>
      <div class="tips" style="border-style: solid; border-color: green; margin:20px;padding:30px; border-radius: 25px;">
        <table>
          <tr>
            <td>
              <h1>TIP 03:</h1>
              <p>Studies have shown that wood-chip mulch nearly doubles tree growth in the first few years after planting. A circle of mulch should be placed around every newly planted tree to conserve soil moisture and moderate soil temperatures. The mulch should cover an area at least four times the diameter of the root ball at the time of transplanting and should be 3-4 inches deep, but should stay a few inches away from the trunk.</p>
            </td>
            <td style="width: 200px; height: 180px;">
              <img src="https://cdn.newsapi.com.au/image/v1/14f70e38175f801204c9435092d447af?width=1024" width="100%" height="100%" style="border-radius: 50%; border:1px solid maroon;">
            </td>
          </tr>
        </table>        
      </div>
      <div class="tips" style="border-style: solid; border-color: green; margin:20px;padding:30px; border-radius: 25px;">
        <table>
          <tr>
            <td>
              <h1>TIP 04:</h1>
              <p>If you feel that strong winds may loosen your tree, staking is an option. Try to stake as low as you can on the trunk. This allows the tree to sway with the wind and become strong. The main purpose is to hold the root ball in place. If you stake the tree high on the trunk, it is possible that it will become dependent on the stake. When the time comes to take the stake off, the trunk may be more brittle and break with the wind. The stake or stakes should only remain on for one year. The best form of attachment is called Chain-Lock. It is easy to use and will not damage the trunk of the tree. </p>
            </td>
            <td style="width: 200px; height: 180px;">
              <img src="https://pixfeeds.com/images/6/295692/1200-152969385-staking-tomato-plants.jpg" width="100%" height="100%" style="border-radius: 50%; border:1px solid maroon;">
            </td>
          </tr>
        </table>        
      </div>
      <div class="tips" style="border-style: solid; border-color: green; margin:20px;padding:30px; border-radius: 25px;">
        <table>
          <tr>
            <td>
              <h1>TIP 05:</h1>
              <p>Planting a tree too deep can kill it, so it is important not to dig the planting hole any deeper than is necessary for covering the root ball. For stability, and to prevent settling after planting, the root ball needs to rest on undisturbed soil excavated to a depth to ensure that the tree is replanted at the same depth or one inch higher than it was grown in the nursery. </p>
            </td>
            <td style="width: 200px; height: 180px;">
              <img src="https://blog.magazialucostica.ro/wp-content/uploads/maxresdefault1.jpg" width="100%" height="100%" style="border-radius: 50%; border:1px solid maroon;">
            </td>
          </tr>
        </table>        
      </div>
  </section>
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
  


<input type="submit" name="b1" value="Send Message"></center><br></form>
   
  </div>  </div>

</body>
</html>