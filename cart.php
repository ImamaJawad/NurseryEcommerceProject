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
<link rel="stylesheet" type="text/css" href="css/cart.css">
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="assets/css/custom.css"/>   

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;" >
  <div class="container" id="div_0c00_0"> 
      <div class="menu-position" id="div_0c00_1" align="left;">
    <div align="left" id="div_0c00_2">
    <div class="menu two two1" id="div_0c00_3"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" id="div_0c00_4"><h3 id="h3_0c00_0">Plant </h3><h3 id="h3_0c00_1">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_0c00_5"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_0c00_6"><b id="b_0c00_0"><a href="HomePage.php" id="a_0c00_0">HOME</a></b></div>
<div class="menu col-15 col-m-15 col-n-2"><b id="b_0c00_1"><a href="plantsMain (1).php" id="a_0c00_1">PLANTS</a></b></div> 
  <div class="menu col-25 col-m-25 col-n-5"><b id="b_0c00_2"><a href="HomePage.php?#Seasonal" id="a_0c00_2">SEASONAL</a></b></div>
          <div class="menu col-1 col-m-1 col-n-15"><b id="b_0c00_3"><a href="ToolPage (3).html" id="a_0c00_3">TOOLS</a></b></div>
  <div class="menu col-1 col-m-1 col-n-15"><b id="b_0c00_4"><a href="TipsPage.html" id="a_0c00_4">TIPS</a></b></div>
 <div class="menu col-15 col-m-15 col-n-3"><b id="b_0c00_5"><a href="NurseryPage.php" id="a_0c00_5">NURSERIES</a></b></div>

  <div class="menu col-15 col-m-15 col-n-3"  ><b id="b_0c00_6"><a href="SignUpForm.php" id="a_0c00_6">SIGN UP</a></b></div>



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

   <div class="menu two two1 dropdown" id="div_0c00_7"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
  <div class="dropdown-content">
    <a href="HomePage.php">HOME</a>
    <a href="PlantsMain.php">PLANTS</a>
    <a id="Seasonal">SEASONAL PICKS</a>
    <a href="ToolPage.html">TOOLS</a>
    <a href="TipsPage.html">TIPS</a>
    <a href="SignUpForm.php">SIGN UP</a>
    <a href="NurseryPage">NURSERIES</a>
    <a href="logout.php">LOGOUT</a>

  </div>
</div>
<div class="menu two two1" id="div_0c00_8"><a href="#"><div id="div_0c00_9" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_0c00_0"></div><br><div id="div_0c00_10"><a href="#">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
<br>
<br>
    <div class="container-fluid breadcrumbBox text-center">
      <ol class="breadcrumb">
        <li class="active"><a href="#">Order</a></li>
        <li><a href="confirm.php">Confirm</a></li>
      </ol>
    </div>
    
    <div class="container text-center">
            <div class="col-md-5 col-sm-12">
        <h1>
          View Your Cart contents!
        </h1><p>Your shopping cart</p>
        <div class="bigcart"></div>
        
        
      </div>
<div class="col-md-7 col-sm-12 text-left">
        <?php
        $db=mysqli_connect('localhost','root','','new');
        if(!$db){
          die("Connection failed" . mysqli_connect_error());
        } $price=0;
        $sql="SELECT * FROM addition inner join cart on addition.AddId=cart.AddID inner join customer on customer.Cid=cart.CID inner join product on product.Pid=addition.Pid inner join nurseries on nurseries.Nid=addition.Nid INNER join retailer on retailer.Rid=nurseries.Rid";
        $results=mysqli_query($db,$sql);
        if (mysqli_num_rows($results) >0 ){
          echo "<table><tr><th>Product</th><th>Price</th><th>Quantity Ordered</th><th>Nursery Name</th><th>Retailer Name</th></tr>";
          while($row=mysqli_fetch_assoc($results)){
           

            if ($_SESSION["t3"]===$row["Cid"]){
              $price=$price+($row['Price']*$row['Quantity']);
              echo "<tr><td>".$row['Pname']."</td><td>".$row['Price']."</td><td>".$row['Quantity']."</td><td>".$row['Nname']."</td><td>".$row['Rid']."</td></tr>" ;
            }
            
            
          }
          echo "</table>";
echo "<center><b><h2> Total Price is:$".$price."</h2></b></center>";

echo"<center><form method='POST' action='confirm.php?w=1'>
              <input type='submit' class='submitbutton' name='b' value='CONFIRM'>
              </form></center>";

        }
        else{echo "0 results";
          
        }
        mysqli_close($db);
        ?>
        </div>

      
      

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/customjs.js"></script>
</div>
<div id="footer" class="container text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;">
  <center>
  <div id="div_0c00_11"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>

<form><center><h1 id="h1_0c00_0">DROP US A MESSAGE</h1>
  <div class="container" id="div_0c00_12">
      
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