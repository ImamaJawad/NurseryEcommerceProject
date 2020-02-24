<?php include('task1.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>SignUpForm</title>
      <script>
function validateForm() {
  var x = document.forms["myForm"]["p1"].value;
    var y = document.forms["myForm"]["p2"].value;
  if (x != y ){
    alert("confirm password and password don't match");
    return false;
  }
}
</script>
  <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/np.css" >
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body class="first">
      <div class="menu-position" id="div_0752_0" align="left;">
    <div align="left" id="div_0752_1">
    <div class="menu two two1" id="div_0752_2"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" id="div_0752_3"><h3 id="h3_0752_0">Plant </h3><h3 id="h3_0752_1">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_0752_4"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_0752_5"><b id="b_0752_0"><a href="HomePage.php" id="a_0752_0">HOME</a></b></div>
<div class="menu col-15 col-m-15 col-n-2"><b id="b_0752_1"><a href="plantsMain (1).php" id="a_0752_1">PLANTS</a></b></div> 
  <div class="menu col-25 col-m-25 col-n-5"><b id="b_0752_2"><a href=HomePage.php?#Seasonal" id="a_0752_2">SEASONAL</a></b></div>
          <div class="menu col-1 col-m-1 col-n-15"><b id="b_0752_3"><a href="ToolPage.php" id="a_0752_3">TOOLS</a></b></div>
  <div class="menu col-1 col-m-1 col-n-15"><b id="b_0752_4"><a href="TipsPage.php" id="a_0752_4">TIPS</a></b></div>
 <div class="menu col-15 col-m-15 col-n-3"><b id="b_0752_5"><a href="NurseryPage.php" id="a_0752_5">NURSERIES</a></b></div>

  <div class="menu col-15 col-m-15 col-n-3"  ><b id="b_0752_6"><a href="SignUpForm.php" id="a_0752_6">SIGN UP</a></b></div>



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

   <div class="menu two two1 dropdown" id="div_0752_6"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
  <div class="dropdown-content">
    <a href="HomePage.php" id="a_0752_7">HOME</a>
    <a href="PlantsMain (1).php" id="a_0752_8">PLANTS</a>
    <a href="HomePage.php?#Seasonal" id="a_0752_9">SEASONAL PICKS</a>
    <a href="ToolPage.php" id="a_0752_10">TOOLS</a>
    <a href="TipsPage.php" id="a_0752_11">TIPS</a>
    <a href="SignUpForm.php" id="a_0752_12">SIGN UP</a>
    <a href="NurseryPage" id="a_0752_13">NURSERIES</a>
    <a href="logout.php" id="a_0752_14">LOGOUT</a>

  </div>
</div>
<div class="menu two two1" id="div_0752_7"><a href="SignUpForm.php"><div id="div_0752_8" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_0752_0"></div><br><div id="div_0752_9"><a href="SignUpForm.php" id="a_0752_15">Sign-Up</a></div></a></div>
</div>
  


<div class="menu two two1" id="div_0752_10"><a href="#"><div id="div_0752_11" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_0752_1"></div><br><div id="div_0752_12"><a href="#">Sign-Up</a></div></a></div>
</div>
  <div id="div_0752_13"></div>
    <br>
  <br>
  <br>
  <section>

  <div class="text">
    <div id="div_0752_14"> <h1>SIGN UP</h1> </div>
    <form method="POST" name="myForm" action="task1.php" onsubmit="return validateForm()">
      <div class="container">
        <div class="form-group">
          <label>First Name</label><input type="text" name="t1" style="margin-left: 70px; margin-right: 40px; margin-top:15px; margin-bottom: 15px;" >
        </div>
        <div class="form-group">
          <label>Last Name</label><input type="text" name="t2"  style="margin-left: 72px; margin-right: 40px; margin-top: 15px; margin-bottom: 15px;" >
        </div>
        <div class="form-group">
        <label>Email</label><sup>*</sup><input type="Email" name="e1"placeholder="required" style="margin-left: 98px; margin-right: 40px; margin-top: 15px; margin-bottom: 15px;" required>
        </div>
        <div class="form-group">
        <label>User ID</label><sup>*</sup><input type="text" name="t3" placeholder="required" style="margin-left: 89px; margin-right: 40px; margin-top: 15px; margin-bottom: 15px;"  required>
      </div>  
      <div class="form-group">  
        <label>Password</label><sup>*</sup><input type="Password" name="p1" placeholder="required" style="margin-left: 72px; margin-right: 15px; margin-top: 15px; margin-bottom: 15px;" required > 
      </div>
      <div class="form-group">  
        <label>Confirm Password</label><sup>*</sup><input type="Password" name="p2" placeholder="required" style="margin-left: 15px; margin-right: 30px; margin-top: 15px; margin-bottom: 15px;" required>
      </div>  

        <div id="div_0752_15"><b> ACCOUNT TYPE<sup>*</sup></b>&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="radio" name="r1" value="Customer" id="input_0752_6"> Customer <input type="radio" name="r1" value="Retailer" id="input_0752_7"> Retailer</div><input type="radio" name="r1" value="Administrator" id="input_0752_8"> Administrator</div>
          <input type="submit" name="b1" value="SIGN UP" class="submitbutton" id="input_0752_9">
        </div>
        <br><br><br>
      </form>
    </div>
  </section>
  <br>
  <br>
  <br>
  <div id="footer" class="container2 text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;" >
  <center>
  <div id="div_0752_16"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>
<form><center><h1 id="h1_0752_0">DROP US A MESSAGE</h1>
  <div class="container2" id="div_0752_17">
      
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