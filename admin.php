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
<link rel="stylesheet" type="text/css" href="css/admin.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/admin.css">

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;">
  <div class="container" id="div_2a4d_0"> 
      <div class="menu-position" id="div_2a4d_1" align="left;">
    <div align="left" id="div_2a4d_2">
    <div class="menu two two1" id="div_2a4d_3"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" id="div_2a4d_4"><h3 id="h3_2a4d_0">Plant </h3><h3 id="h3_2a4d_1">Planet</h3></div></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_2a4d_5"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 col-m-1 col-n-2" id="div_2a4d_6"><b id="b_2a4d_0"><a href="HomePage.php" id="a_2a4d_0">HOME</a></b></div><?php

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

   <div class="menu two two1 dropdown" id="div_2a4d_7"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
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
<div class="menu two two1" id="div_2a4d_8"><a href="#"><div id="div_2a4d_9" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_2a4d_0"></div><br><div id="div_2a4d_10"><a href="#">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
</body>
</br>
</br>
</br>
</br>
</br>
</br>

    <div class="container-fluid breadcrumbBox text-center">
      <ol class="breadcrumb">
        <li class="active"><a href="#">View Editations</a></li>
        
      </ol>
    
    
    <div class="container text-center">

      <div >
        <div><img id="img_2a4d_1" src="http://cropinsurancesolutions.com/wp-content/uploads/2017/07/nursery-icon2.png" align="center"></div>
      
        <p>
          <div ></div>
        </p>
      </div>
     
      <div >
        <?php
        $db=mysqli_connect('localhost','root','','new');
        if(!$db){
          die("Connection failed" . mysqli_connect_error());
        }
        $query="SELECT edit.Fid,edit.Information,flower.FName,edit.EditID FROM edit inner join flower where Aid=\"$re\" and edit.Fid=flower.Fid";
        $results=mysqli_query($db,$query);
        if($results){
        if (mysqli_num_rows($results) >0 ){
          echo "<table><tr><th>Flower ID</th><th>Information</th><th>flower Name </th><th>Status</th></tr>";
          while($row=mysqli_fetch_assoc($results)){
            $edit=$row['EditID'];
          $fid=$row['Fid'];
           $info=$row['Information'];

              echo "<tr><td>".$row['Fid']."</td><td>".$row['Information']."</td><td>".$row['FName']."</td><td>

              <form action='approve.php'>
              <input type='hidden' name='fid' value='".$fid."'>
              <input type='hidden' name='rid' value='".$re."'>
              <input type='hidden' name='edit' value='".$edit."'> 
              <input type='hidden' name='info' value='".$info."'> 
              <input type='Submit' name='a' value='Approve'></form>
              </td><td><form action='reject.php'> 
              <input type='hidden' name='rid' value='".$re."'>
              <input type='hidden' name='edit' value='".$edit."'>
              <input type='Submit' name='r' value='Reject'></form>
              </td>



              </tr>" ;
            }
             echo "</table>";mysqli_close($db);
            
          }}
            else{
              echo "0 results";
            }
        ?>
        </div>
       <div id="div_2a4d_11">

      
        <p>
          
        </p>
      </div>
    <div id="popover" style="display: none" >
      <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
      <a href="#"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
    
    <!-- JavaScript includes -->

    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/customjs.js"></script>
</div>
<div id="footer" class="container text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;">
  <center>
  <div id="div_2a4d_12"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>
<form><center><h1 id="h1_2a4d_0">DROP US A MESSAGE</h1>
  <div class="container" id="div_2a4d_13">
      
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