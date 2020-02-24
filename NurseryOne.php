<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Nursery Page</title>



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
<link rel="stylesheet" type="text/css" href="css/n1.css">
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
  <div class="container" id="div_f973_0"> 
      <div class="menu-position" id="div_f973_1" align="left;">
    <div align="left" id="div_f973_2">
    <div class="menu two two1" id="div_f973_3"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" id="div_f973_4"><h3 id="h3_f973_0">Plant </h3><h3 id="h3_f973_1">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_f973_5"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_f973_6"><b id="b_f973_0"><a href="HomePage.php" id="a_f973_0">HOME</a></b></div><?php

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

   <div class="menu two two1 dropdown" id="div_f973_7"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
  <div class="dropdown-content">
    <a href="HomePage.php" id="a_f973_7">HOME</a>
    <a href="PlantsMain (1).php" id="a_f973_8">PLANTS</a>
    <a href="HomePage.php?#Seasonal" id="a_f973_9">SEASONAL PICKS</a>
    <a href="ToolPage.php" id="a_f973_10">TOOLS</a>
    <a href="TipsPage.php" id="a_f973_11">TIPS</a>
    <a href="SignUpForm.php" id="a_f973_12">SIGN UP</a>
    <a href="NurseryPage" id="a_f973_13">NURSERIES</a>
    <a href="logout.php" id="a_f973_14">LOGOUT</a>

  </div>
</div>
<div class="menu two two1" id="div_f973_8"><a href="SignUpForm.php"><div id="div_f973_9" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_f973_0"></div><br><div id="div_f973_10"><a href="SignUpForm.php" id="a_f973_15">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
<header id="header">
  <div class="menu two two1" id="div_f973_11"><a href="#"><div id="div_f973_12" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_f973_1"></div><br><div id="div_f973_13"><a href="#">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
<div class="jumbotron layer" id="div_f973_14">
  <div class="overlay container row col-md-8 col-md-offset-2" id="div_f973_15">
   <h2 id="h2_f973_0">Hill House Nursery And Plant Care</h2><br>
  </div>  
  <p id="p_f973_0">
<i class="fa fa-twitter" id="i_f973_0"></i>        
<i class="fa fa-facebook" id="i_f973_1"></i>       
<i class="fa fa-flickr" id="i_f973_2"></i> 
<i class="fa fa-instagram" id="i_f973_3"></i>  
      </p> 
<div id="backdrop" style="margin-top: 0px;background: url(css/WebsiteImages/overlay.jpg) fixed rgba(39,62,84,0.82);max-width: 100%">
  <div id="slideshow">
   <div>
     <img src="css/WebsiteImages/n4.jpg" id="img_f973_2" height=300 width=600>
   </div>
   <div>
     <img src="css/WebsiteImages/n2.jpg" id="img_f973_3" height=300 width=600>
   </div>
   <div>
     <img src="css/WebsiteImages/n3.jpg" id="img_f973_4" height=300 width=600>
   </div>
   <div>
     <img src="css/WebsiteImages/n1.jpg" id="img_f973_5" height=300 width=600>
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
  <div id="div_f973_16">
      <h2 id="h2_f973_1">Our New Variety</h2>
      <hr id="hr_f973_0">
   
    <div class="image2" id="div_f973_17">
      <img src="css/ProductImages/iris.jpg" width="60%" height="60%" id="img_f973_6"><b><h1 id="h1_f973_0">Purples<br>Iris</h1></b> 
    </div>
    <div class="image2"id="div_f973_18">
      <img src="css/ProductImages/garden-fork.jpg" width="60%" height="60%" id="img_f973_7"><b><h1 id="h1_f973_1">Garden<br>Fork</h1></b> 
    </div>
    <div class="image2" id="div_f973_19">
      <img src="css/ProductImages/looper.jpg" width="60%" height="60%" id="img_f973_8"><b><h1 id="h1_f973_2">Power<br>looper</h1></b> 
    </div>
    <br><br>
  </div>
  </center>


  <div id="div_f973_20">
    <img src="http://sunvalleyomaha.com/wp-content/uploads/2016/01/plant-nursery.jpg" width="500px" height="800px" class="img-thumbnail" position=absolute float=left id="img_f973_9">
    <div id="div_f973_21" >
                  <div id="div_f973_22">
                    <h1>Introduction</h1>
                    <p id="p_f973_1">How can we help you grow your garden?

Whether you prefer an easy, low maintenance garden or large formal garden, you will find the perfect plants from our extensive selections that will help you create a garden to love.I grew up working with plants in my parents’ nursery. By the time, Steve and I started Hill House Nursery; I had a long history of planting and caring for plants. As a business owner, wife and mom, I just don’t have time for extensive gardening. Plants that make it into my garden must be extremely talented. Multi-seasonal plants are my favorites such as flowering evergreen perennials, herbs, ornamental grasses, shrubs and small trees with interesting branching structure and long cross over season blooms. Oh…and strawberry plants.

Finding the right plants needn’t be a daunting task. From traditional favorites to new hybrids, we search out the best plants for landscaping and gardening projects. As always, we’re here to help.

Cheryl Jones, President

Hill House Nursery And Plant Care Inc.</p>
                  </div>
  </div>
  </div>
  <div id="div_f973_23">
    <div id="div_f973_24" >
                  <div id="div_f973_25">
                    <h1 id="h1_f973_3">Available Products<br> In This Nursery</h1><br>
                    <p id="p_f973_2">
<?php
if (isset($_GET['count'])){
  if($_GET['count']>0){


echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>$(document).ready(function(){alert("Product added to cart!");
})</script>';}}
?>

        <?php
        $db=mysqli_connect('localhost','root','','new');
        if(!$db){
          die("Connection failed" . mysqli_connect_error());
        }
        $sql="SELECT * FROM addition inner join product on addition.Pid=product.Pid WHERE NId=1";
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
  <div id="div_f973_26"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>
<form><center><h1 id="h1_f973_4">DROP US A MESSAGE</h1>
  <div class="container" id="div_f973_27">
      
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