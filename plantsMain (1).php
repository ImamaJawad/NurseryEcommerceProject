<!DOCTYPE html>
<html id="html_eaea_0">
<head>
<script type="text/javascript">
function PlaySound(soundobj) {
    var thissound=document.getElementById(soundobj);
    thissound.play();
}
</script>
<script type="text/javascript">
  function common(){
    document.getElementById('seasonflower').style.display='none';
    document.getElementById('commonflower').style.display='block';
  }
  function season() {
    document.getElementById('commonflower').style.display='none';
    document.getElementById('seasonflower').style.display='block';
  }
  function showall(){
    document.getElementById('seasonflower').style.display='block';
    document.getElementById('commonflower').style.display='block';
  }
  
</script>

<title>Plants</title>

<meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/pm.css"/> 
<style>
@import url('https://fonts.googleapis.com/css?family=Calligraffitti|Cedarville+Cursive|Cookie|Fredericka+the+Great|Parisienne|Petit+Formal+Script|Pinyon+Script|Rochester|Sue+Ellen+Francisco|Tangerine|Ubuntu+Mono|Signika');

</style>

</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" ">
<nav id="menu" class="navbar navbar-default navbar-fixed-top" style="width:100%;padding:0%;background-color: white;background-size: cover;" >
  <div class="container" id="div_eaea_0"> 
      <div class="menu-position" id="div_eaea_1" align="left;">
    <div align="left" id="div_eaea_2">
    <div class="menu two two1" id="div_eaea_3"><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="40" height="40" align="right"></div>
    <div class="menu two two1" id="div_eaea_4"><h3 id="h3_eaea_0">Plant </h3><h3 id="h3_eaea_1">Planet</h3></div></div>
    <div class="menu col-1 cm-1 col-n-2" id="div_eaea_5"><b ><img src="https://78.media.tumblr.com/3c24f2f34a0009ccad27dfbf5c3321d3/tumblr_mpjrgjDVov1r0sn0fo1_500.png" width="45" height="45" align="center"></b></div>
    <div class="menu col-1 cm-1 col-n-2" id="div_eaea_6"><b id="b_eaea_0"><a href="HomePage.php" id="a_eaea_0">HOME</a></b></div>
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
   <div class="menu two two1 dropdown" id="div_eaea_7"><button class="dropbtn  two two1 two2"><img src="https://21thirteen.com/wp-content/uploads/2016/03/hamburger-menu.jpg" width="40" height="40" align="left"></button>
  <div class="dropdown-content">
    <a href="HomePage.php" id="a_eaea_7">HOME</a>
    <a href="PlantsMain (1).php" id="a_eaea_8">PLANTS</a>
    <a href="HomePage.php?#Seasonal" id="a_eaea_9">SEASONAL PICKS</a>
    <a href="ToolPage.php" id="a_eaea_10">TOOLS</a>
    <a href="TipsPage.php" id="a_eaea_11">TIPS</a>
    <a href="SignUpForm.php" id="a_eaea_12">SIGN UP</a>
    <a href="NurseryPage" id="a_eaea_13">NURSERIES</a>
    <a href="logout.php" id="a_eaea_14">LOGOUT</a>

  </div>
</div>
<div class="menu two two1" id="div_eaea_8"><a href="SignUpForm.php"><div id="div_eaea_9" ><img src="https://openclipart.org/image/2400px/svg_to_png/247320/abstract-user-flat-4.png" width="30"  id="img_eaea_0"></div><br><div id="div_eaea_10"><a href="SignUpForm.php" id="a_eaea_15">Sign-Up</a></div></a></div>
</div>
</div>
</nav>
<div class="first"> 
  <div class="row">
  <div id="div_eaea_11">
    <br>
<br>
<br>
<p>
</p>
<p>
</p>
<br>
<br>
  <h1 id="h1_eaea_0">Plants</h1>
<h2 id="h2_eaea_0">View full collection</h2>
<center>
<form>
      search <input type="text" id="realtxt" size=40 onchange="searchSel(this)">
      <select id="realitems">
        <option value="flower">Flower</option>
        <option value="lily.php">Lily</option>
        <option value="lavender.html">Lavender</option>
        <option value="3">Freesia</option>
        <option value="4">Rose</option>
        <option value="5">Tulips</option>
        <option value="5">Carnation</option>
      </select>
    </form>
</center>

<script type="text/javascript">
    function searchSel(e) 
    {
      var input = document.getElementById('realtxt').value.toLowerCase(),
          len = input.length,
          output = document.getElementById('realitems').options;
      for(var i=0; i<output.length; i++){
        if (output[i].text.toLowerCase().slice(0, len) == input)
          output[i].selected = true;
      

      if (input == '')
        output[0].selected = true;
      window.location=e.value;

    }
}
    </script>

<br>
<br>
<br>
<p>
</p>
<br>
<br>
<br>
<p>
</p>
<br>
<br>
<br>
<p>
</p>

</div>

 </div>
</div>

<p></p>
<br>
  <?php
if(isset($_GET['r'])){
    $r=$_GET['r'];
        echo "<p class='s1'>".$r."</p>";
      }
else{
  echo'</div>
  <div class="filters">
  <p class="filterhead">Pick a Type:</p>
  <br>
  <input type="radio" name="filter" value="Show All" id="showall" onclick="showall();"checked="checked">&nbsp;&nbsp;Show All&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="radio" name="filter" value="Common Flower" onclick="common();">&nbsp;&nbsp;Common Flower&nbsp;&nbsp;&nbsp;
  <input type="radio" name="filter" value="Seasonal Flowers" onclick="season();">&nbsp;&nbsp;Seasonal Flower&nbsp;&nbsp;&nbsp;
  </div>
<div>
<div id="commonflower">
<h1 style="clear:right;color: blue; font-size: 50px; text-shadow:-1px 0 white,0 1px white,1px 0 white,0  -1px white; text-align: center;">Flowers</h1>
<div style="background-color:#E6E6FA">
<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;margin:5px; padding:2px;float: left" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"> <img onmouseover="PlaySound(\'mySound\')" src="https://www.cruzflor.com/2200-large_default/fresia-lila-artificial.jpg" width="100%"></a>
</div><audio id="mySound" src="click.mp3">
</audio>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="css/daffodil.jpg" width="100% height="100%"></a></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden; background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT1B8FQFxiXUODFzYDfuX4DiZJnn8fNtvMvHhtlde1tQrewWn3f" onmouseover="PlaySound(\'mySound\')" width="100%" ></a></div>
<div class="row"></div>

<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="text-align:center;float: left;" class="col-25 col-m-25 col-n-25"><h2>Freesia</h2></div>
<div style="float: left;" class="col-125 cols-m-125 col-n-125"></div>
<div style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;">Daffodils</h2></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;"><a href="lavender (3).php" style="text-decoration: none; color: black;">Lavender</a></h2></div>
<div class="row"></div>
<br>
<br>

<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;"class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="https://png.pngtree.com/element_origin_min_pic/17/03/04/9ed0e7e646caa148816e63fcac612b0c.jpg" width="100%" height="100%"></a></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="https://images.fineartamerica.com/images-medium-large-5/red-tulips-white-background-natalie-kinnear.jpg" width="100% height="100%"></a></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="https://s3.pixers.pics/pixers/700/FO/63/41/12/69/700_FO63411269_2a592552ca1ace9bc2bafd7d873dddc9.jpg" width="100%"></a></div>
<div class="row"></div>
<p style="clear: both;"></p>
<div class="row"></div>

<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="text-align:center;float: left;" class="col-25 col-m-25 col-n-25"><h2 >Gardenia</h2></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div   style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;">Tulips</h2></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div  style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;">Iris</h2></div>
<div class="row"></div>
<br>
<br>
</div> 
</div>
<div class="row"></div>
<br>

<div id="seasonflower">
<h1 style="color: blue; text-shadow:-1px 0 white,0 1px white,1px 0 white,0  -1px white; text-align: center; font-size: 50px;">Seasonal Collection</h1>
<div style="background-color:     #E6E6FA">
<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;margin:5px; padding:2px;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="https://s3.pixers.pics/pixers/700/FO/58/15/72/76/700_FO58157276_19d593ccf26ec050accfeeaca50eeb9b.jpg" width="100%"></a></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX3300127.jpg" width="100% height="100%"></a></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden; background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="https://us.123rf.com/450wm/flower4/flower41705/flower4170500020/77571280-purple-and-yellow-flowers-pansy-isolated-on-white-background-flat-lay-top-view.jpg?ver=6" width="100%" ></a></div>
<div class="row"></div>

<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="text-align:center;float: left;" class="col-25 col-m-25 col-n-25"><h2 ">Orchids</h2></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;">Chrys</h2></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;">Pansies</h2></div>
<div class="row"></div>
<br>
<br>


<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;"class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="http://tatflowers.ru/750/roza-40-sm-35-sht.jpg" width="100%" height="100%"></a></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="lily.php"><img onmouseover="PlaySound(\'mySound\')" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRYhDiJPx2uCBGAlDvMOY6XKNAwaTFQT_At2LdL_gge6BDvNRly" width="100% height="100%"></a></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="border-radius: 50%;overflow: hidden;background-color: white;float: left;" class="col-25 col-m-25 col-n-25"><a href="https://www.google.com"><img onmouseover="PlaySound(\'mySound\')" src="https://www.fiftyflowers.com/site_files/FiftyFlowers/Image/Product/Wellington-Carnation-Head-150_d555076d.jpg" width="100%"  ></a></div>
<div class="row"></div>
<p style="clear: both;"></p>
<div class="row"></div>

<div style="float: left;" class="col-1 col-m-1 col-n-1"></div>
<div style="text-align:center;float: left;" class="col-25 col-m-25 col-n-25"><h2>Roses</h2></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;"><a href="lily.php" style="text-decoration: none; color: black;">Lily</a></h2></div>
<div style="float: left;" class="col-125 col-m-125 col-n-125"></div>
<div style="float: left;" class="col-25 col-m-25 col-n-25"><h2 style="text-align:center;">Carnation</h2></div>
<div class="row"></div>
<br>
<br>
</div>
</div>
</div>';
}

?>

 <div id="footer" class="container text-center col-md-8" style="background-color: black; width: 100%; background-attachment: fixed;">
  <center>
  <div id="div_eaea_12"><caption>&copy;2018 PlantPlanet. All rights reserved</caption></div>
</center>
<form><center><h1 id="h1_eaea_1">DROP US A MESSAGE</h1>
  <div class="container" id="div_eaea_13">
      
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
