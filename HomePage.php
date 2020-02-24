<?php
session_start();
?>
<!DOCTYPE html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PlantPlanet HomePage</title>
  <link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"><link rel="stylesheet" type="text/css" href="css/hp.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
  <link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
  <link href="https://fonts.googleapis.com/css?family=Signika|Calligraffitti|Cedarville+Cursive|Cookie|Fredericka+the+Great|Parisienne|Petit+Formal+Script|Pinyon+Script|Rochester|Sue+Ellen+Francisco|Tangerine|Ubuntu+Mono|Signika" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Gruppo' rel='stylesheet'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- navigation bar -->
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
  <nav id="menu" class="navbar navbar-default navbar-fixed-top" >
    <div class="container" id="div_8ec7_0"> 
      <div class="menu-position" id="div_8ec7_1" align="left;">
        <div align="left" id="div_8ec7_2">
          <div class="menu two two1" id="div_8ec7_3"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
          <div class="menu two two1" id="div_8ec7_4"><h3 id="h3_8ec7_0">Plant </h3><h3 id="h3_8ec7_1">Planet</h3></div></div>
          <div class="menu col-1 col-m-1 col-n-2" id="div_8ec7_5"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
          <div class="menu col-1 col-m-1 col-n-2" id="div_8ec7_6"><b id="b_8ec7_0"><a href="HomePage.php" id="a_8ec7_0">HOME</a></b></div>
          <?php

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
          <!-- navigation bar for small view -->
          <div class="menu two two1 dropdown" id="div_8ec7_7"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
            <div class="dropdown-content">
              <a href="HomePage.php" id="a_8ec7_7">HOME</a>
              <a href="PlantsMain (1).php" id="a_8ec7_8">PLANTS</a>
              <a href="HomePage.php?#Seasonal" id="a_8ec7_9">SEASONAL PICKS</a>
              <a href="ToolPage.php" id="a_8ec7_10">TOOLS</a>
              <a href="TipsPage.php" id="a_8ec7_11">TIPS</a>
              <a href="SignUpForm.php" id="a_8ec7_12">SIGN UP</a>
              <a href="NurseryPage" id="a_8ec7_13">NURSERIES</a>
              <a href="logout.php" id="a_8ec7_14">LOGOUT</a>
            </div>
          </div>
          <div class="menu two two1" id="div_8ec7_8"><a href="SignUpForm.php"><div id="div_8ec7_9" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_8ec7_0"></div><br><div id="div_8ec7_10"><a href="SignUpForm.php" id="a_8ec7_15">Sign-Up</a></div></a></div>
        </div>
      </div>
    </nav>
    <header id="header" >
      <div id="div_8ec7_11">
        <div class="col-md-9 col-md-offset-2" id="div_8ec7_12">
          <div id="backdrop" >
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <!--Main display-->
            <h1 id="h1_8ec7_0"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plant Planet<br></h1> 
            <p id="p_8ec7_0">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;THE COMPLETE NURSERY AND GARDENING EXPERIENCE.<br>
              <br>
              <br>
              <p> 
              </p>
              <p>
              </p>
              <p>
              </p>
              <p>
                <br>
                <br>
                <br>
              </p>
              <br>
              <br>
              <br>
              <br>
            </div>
          </div>
        </header>
        <br>
        <br>
        <div id="div_8ec7_13">
          <div id="div_8ec7_14" class="col-1 col-m-1 col-n-0"></div>
          <div id="div_8ec7_15" class="col-4 col-m-4 col-n-4">
            <br>
            <br>
            <!-- Introduction-->
            <h2 id="h2_8ec7_0">Introduction</h2>
            <h3 id="h3_8ec7_2">How can we help you grow your garden?</p></h3>
            <h3 id="h3_8ec7_3"> Whether you prefer an easy, low maintenance garden or large formal garden, you will find the perfect plants from our extensive selections that will help you create a garden to love! </h3>
            <h3 id="h3_8ec7_4">Our website will help you purchase different flowers using different nurseries so that you can compare the prices of different plants.</h3>
          </div>
          <div id="div_8ec7_16" class="col-m-6 col-n-6 col-6"><img src="https://upload.wikimedia.org/wikipedia/commons/9/98/Orchis_simia_%28flowers%29.jpg" width="100%" height="100%" id="img_8ec7_1" >
          </div>
        </div>
        <p id="p_8ec7_1"></p>
        <div class="row"></div>
        <div class="row"></div>
        <center > 
          <br><br>
          <div id="testimonials" class="text-center" >
            <div class="overlay" id="div_8ec7_17">
              <div class="container">
                <div class="section-title">
                  <!--Tip of the day section-->
                  <b><h2>Tip of the day</h2></b>
                </div>
                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div id="testimonial">
                      <div id="div_8ec7_18">
                        <table>
                          <tr>
                            <td>
                              <img src="https://flouronmyface.com/wp-content/uploads/2016/06/Proper-sunlight-for-shade-plants-in-the-garden-flouronmyface.jpg" width="100%" height="100%" id="img_8ec7_2">
                            </td>
                            <td>
                              <b><p id="p_8ec7_2"> Some plants are shade plants, others need sun, and yet even more plants are partial shade or sun! Don't overlook that part of your plant's description!</p>
                                <p id="p_8ec7_3">Place your container garden on wheels or a trolley, so you can move it around in the event your selected spot doesn't get as much sunlight as you originally thought</p></b>
                              </td>
                            </tr>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div id="Seasonal" >
            <!--Seasonal Collection section-->
            <h2 id="h2_8ec7_1">Seasonal Collection</h2>
            <hr>
            <div class="image2" id="div_8ec7_19">
              <img src="https://cdn.webvanta.com/000000/51/74/slider_detail/uploads/plant/1475607024-8030daf57623271e8/37492328_m.jpg" width="70%" height="70%" id="img_8ec7_3"><b><h1 id="h1_8ec7_1">Japanese<br>Quince</h1></b> 
            </div>
            <div class="image2"id="div_8ec7_20">
              <img src="http://www.naturalnewsherbs.com/wp-content/uploads/sites/297/2017/09/Pansies-1-604x403.jpg" width="70%" height="70%" id="img_8ec7_4"><b><h1 id="h1_8ec7_2">Winter<br>Aconites</h1></b> 
            </div>
            <div class="image2" id="div_8ec7_21">
              <img src="https://mediasv6.truffaut.com/Articles/jpg/0492000/492633_003_1000.jpg" width="70%" height="70%" id="img_8ec7_5"><b><h1 id="h1_8ec7_3">Viburnum<br>Species</h1></b> 
            </div>
            <br><br>
            <div id="div_8ec7_22">
              <!-- What clients say-->
              <h2 id="h2_8ec7_2">&nbsp;&nbsp;&nbsp;&nbsp;What clients say about us</h2>
              <hr>
              <table>
                <tr>
                  <td id="td_8ec7_0">
                    <i class="fa fa-check-square-o" id="i_8ec7_0"></i>
                    <i class="fa fa-check-square-o" id="i_8ec7_1"></i>
                    <i class="fa fa-check-square-o" id="i_8ec7_2"></i>
                  </td>
                </tr>
                <tr>
                  <td id="td_8ec7_1">
                    <p id="p_8ec7_4">Fast</p>
                    <p id="p_8ec7_5">Reliable</p>
                    <p id="p_8ec7_6">Efficient</p>
                  </td>
                </tr>
              </table>
              <div>
              </div>
            </center>
            <!-- footer-->
            <div id="footer" class="container text-center col-md-8" >
              <center>
                <div id="div_8ec7_23"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
              </center>
              <form><center><h1 id="h1_8ec7_4">DROP US A MESSAGE</h1>
                <div class="container" id="div_8ec7_24">    
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