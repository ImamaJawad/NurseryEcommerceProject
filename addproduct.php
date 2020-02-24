<?php
session_start();
?>

<!DOCTYPE html>
<head>

</head>


<!DOCTYPE html>
<html>
  <head>
    <title>Retailer</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css"/> 
        <link rel="stylesheet" type="text/css" href="css/addproduct.css"/>  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Gruppo' rel='stylesheet'><title>PlantPlanet HomePage</title>

 <style>
table,td,th{
  border: 1px solid;
}
</style>

  </head>

  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;" >
<nav id="menu" class="navbar navbar-default navbar-fixed-top" >
  <div class="container" id="div_b3ec_0"> 
      <div class="menu-position" id="div_b3ec_1" align="left;">
    <div align="left" id="div_b3ec_2">
    <div class="menu two two1" id="div_b3ec_3"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" id="div_b3ec_4"><h3 id="h3_b3ec_0">Plant </h3><h3 id="h3_b3ec_1">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_b3ec_5"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_b3ec_6"><b id="b_b3ec_0"><a href="HomePage.php" id="a_b3ec_0">HOME</a></b></div>
<div class="menu col-15 col-m-15 col-n-2"><b id="b_b3ec_1"><a href="plantsMain (1).php" id="a_b3ec_1">PLANTS</a></b></div> 
  <div class="menu col-25 col-m-25 col-n-5"><b id="b_b3ec_2">SEASONAL</b></div>
          <div class="menu col-1 col-m-1 col-n-15"><b id="b_b3ec_3"><a href="ToolPage (3).html" id="a_b3ec_2">TOOLS</a></b></div>
  <div class="menu col-1 col-m-1 col-n-15"><b id="b_b3ec_4"><a href="TipsPage.html" id="a_b3ec_3">TIPS</a></b></div>
 <div class="menu col-15 col-m-15 col-n-3"><b id="b_b3ec_5"><a href="NurseryPage.php" id="a_b3ec_4">NURSERIES</a></b></div>

  <div class="menu col-15 col-m-15 col-n-3"  ><b id="b_b3ec_6"><a href="SignUpForm.php" id="a_b3ec_5">SIGN UP</a></b></div>



  <?php

        if(isset($_SESSION['t3'])){
          if(isset($_GET['r'])){
session_destroy();echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="text-decoration: none; color: white;">SIGN IN</a></b></div>';}
else{
  echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href="cart.php" style="text-decoration: none; color: white;">CART</a></b>
<div class="dropdown-content">
    <a href="#">Profile</a>
    <a href="cart.php">View Cart</a><a href="logout.php">Log Out</a>
  </div>
        </div>';
}
 
      }
      else if(isset($_SESSION['r1'])){
        if(isset($_GET['ret'])){
        $re=$_GET['ret'];}
        $r1=$_SESSION['r1'];
        if($r1==="Administrator"){echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"admin.php?ret='.$re.'" style="text-decoration: none; color: white;">ADMIN</a></b>
<div class="dropdown-content">
    <a href='.'"admin.php?ret='.$re.'">Profile</a>
    <a href="logout.php">Log Out</a>
  </div>
        </div>';}
          else{if(isset($_GET['re'])){
        $re=$_GET['re'];}

        echo '<div class="menu col-1 col-m-1 col-n-3 t"><b style="width: 100%;"><a href='.'"retailer.php?ret='.$re.'" style="text-decoration: none; color: white;">ACCOUNT</a></b>
<div class="dropdown-content">
    <a href='.'"retailer.php?ret='.$re.'">Profile</a>
    <a href="logout.php">Log Out</a>
  </div>
        </div>';}
        if(isset($_GET['r'])){
session_destroy();echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="text-decoration: none; color: white;">SIGN IN</a></b></div>';}
      }
     else{
         
    
          echo '<div class="menu col-1 col-m-1 col-n-3"><b style="width: 100%;"><a href="Sign In.php" style="text-decoration: none; color: white;">SIGN IN</a></b></div>';
        }
            //display cart
?>

   <div class="menu two two1 dropdown" id="div_b3ec_7"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
  <div class="dropdown-content">
    <a href="HomePage.php">HOME</a>
    <a href="PlantsMain (1).php">PLANTS</a>
    <a href="#">SEASONAL PICKS</a>
    <a href="ToolPage (3).html">TOOLS</a>
    <a href="TipsPage.html">TIPS</a>
    <a href="SignUpForm.php">SIGN UP</a>
    <a href="NurseryPage">NURSERIES</a>
    <a href="logout.php">LOGOUT</a>

  </div>
</div>
<div class="menu two two1" id="div_b3ec_8"><a href="#"><div id="div_b3ec_9" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_b3ec_0"></div><br><div id="div_b3ec_10"><a href="#">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
</body>
<div id="div_b3ec_11">
</br>
</br>

    <div class="container-fluid text-center" id="div_b3ec_12">
      
    
    
    <div class="container text-center">

      <div >
        <br>
    <br>
    
        <h1 id="h1_b3ec_0">ADD PRODUCT TO YOUR NURSERY</h1>
      </div>
    

<?php
$rid=$_GET['re'];
$nid=$_GET['nid'];
?>
<section>
<div class="text1">
  <form method="GET" action="getdata.php"  id="form_b3ec_0">
  Fields marked with * are compulsory.<br>
  <?php echo"
  <input type='hidden' name='rid' value='".$rid."'>
    <input type='hidden' name='nid' value='".$nid."'> 
   " ?>
<br>
  <div class="margins"><input type="radio" name="ProductType" value="Flower"  required>Flower&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="ProductType" value="Tool" >Tool</div>
  <br><div class='margins' id="div_b3ec_13">Quantity: &nbsp;&nbsp;<input type='number' name='quantity' required>&nbsp;&nbsp;&nbsp;&nbsp;
  Price:&nbsp;&nbsp;<input type='number' name='price' required></div><br>
  <br><div class="margins"> <p id="p_b3ec_0">*Product Name:</p>
  <input type="text" name="name" required></div>
  <br>Category Type For Flower:<br>
  <br><input type="radio" name="CategoryType" value="Seasonal"  required>&nbsp;&nbsp;Seasonal Flower&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="CategoryType" value="Common Flower"  required>&nbsp;&nbsp;Common Flower<br><br>
  <p id="p_b3ec_1">*
  Information:</p><textarea placeholder="Enter your info here" rows="10" cols="40" name="ta" required></textarea> <br><br> 
  

    <div id="popover" style="display: none" >
      <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
      <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
    
    <!-- JavaScript includes -->
  Upload The Product Image:
 <br><br><input type="file" name="myimage">
 <br><input type="submit" name="submit_image" value="Upload">
</form>
</div>
</div>
</section>
 
        </div>
       <div id="div_b3ec_14">

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/customjs.js"></script>
</div>
<div id="footer" class="container text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;" >
  <center>
  <div id="div_b3ec_15"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>
<form><center><h1 id="h1_b3ec_1">DROP US A MESSAGE</h1>
  <div class="container" id="div_b3ec_16">
      
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