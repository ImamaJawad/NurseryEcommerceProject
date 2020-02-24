<?php
session_start();
?>

<!DOCTYPE html>
<html>
<title>ToolPage</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/style.css">


<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway|Parisienne|Cookie|ubuntu">
<link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Gruppo' rel='stylesheet'><link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/new.css">
<style>

body,h1,h2,h3,h4,h5 {font-family: Signika;}
* {
  box-sizing: border-box;
}
/* For mobile phones: */
@media only screen and (max-width: 1030px) {
  /* For tablets: */
  .col-t-0{width: 4.165%;display: none;}
  .col-t-1 {width: 8.33%;display: none;}
  .col-t-15{width: 12.495%;display: none;}
  .col-t-175{width: 14.5775%;display: none;}
  .col-t-2 {width: 16.66%;display: none;}
  .col-t-25{width: 20.8225%;display: none;}
  .col-t-3 {width: 25%;display: none;}
  .col-t-35{width: 29.165%;display: none;}
  .col-t-4 {width: 33.33%;}
  .col-t-5 {width: 41.66%;}
  .col-t-6 {width: 50%;}
  .col-t-7 {width: 58.33%;}
  .col-t-8 {width: 66.66%;}
  .col-t-9 {width: 75%;}
  .col-t-10 {width: 83.33%;}
  .col-t-11 {width: 91.66%;}
  .col-t-12 {width: 100%;}
  .two{width: 25%; display: block;}
}

@media only screen and (min-width: 1030px) {
  /* For desktop: */
  .col-v-0{width: 4.165%;}
  .col-v-1 {width: 8.33%;}
  .col-v-15{width: 12.495%;}
  .col-v-175{width: 14.5775%;}
  .col-v-2 {width: 16.66%;}
  .col-v-25{width: 20.8225%;}
  .col-v-3 {width: 25%;}
  .col-v-35{width: 29.165%;}
  .col-v-4 {width: 33.33%;}
  .col-v-5 {width: 41.66%;}
  .col-v-6 {width: 50%;}
  .col-v-7 {width: 58.33%;}
  .col-v-8 {width: 66.66%;}
  .col-v-9 {width: 75%;}
  .col-v-10 {width: 83.33%;}
  .col-v-11 {width: 91.66%;}
  .col-v-12 {width: 100%;}
  .two1{display: none;}
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-m-0 {width: 4.165%;}
  .col-m-1 {width: 8.33%;}
  .col-m-125{width: 10.4225%;}
  .col-m-15{width: 12.495%;}
  .col-m-1625{width: 13.53625%;}
  .col-m-175{width: 14.5775%;}
  .col-m-2 {width: 16.66%;}
  .col-m-25{width: 20.8225%;}
  .col-m-3 {width: 25%;}
  .col-m-35{width: 29.165%;}
  .col-m-4 {width: 33.33%;}
  .col-m-5 {width: 41.66%;}
  .col-m-6 {width: 50%;}
  .col-m-7 {width: 58.33%;}
  .col-m-8 {width: 66.66%;}
  .col-m-9 {width: 75%;}
  .col-m-10 {width: 83.33%;}
  .col-m-11 {width: 91.66%;}
  .col-m-12 {width: 100%;}
}
@media only screen and (min-width: 300px) {
  /* For tablets: */
  .col-n-0 {width: 4.165%;}
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
@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-0 {width: 4.165%;}
  .col-1 {width: 8.33%;}
  .col-125{width: 10.4225%;}
  .col-15{width: 12.495%;}
  .col-1625{width: 13.53625%;}
  .col-175{width: 14.5775%;}
  .col-2 {width: 16.66%;}
  .col-25{width: 20.8225%;}
  .col-35{width: 29.165%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
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
.container {
  width: 200px;
  clear: both;
}

.container input {
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

#div_816e_0{width:100%;padding:0%; float:left }
#div_816e_1{padding-left: 0px }
#div_816e_2{margin-left:-60px;padding-left: 0px }
#div_816e_3{border-left-style: none; float: left;padding-top: 13px;margin-right: 0px;padding-right: 0px;margin-left: -30px;padding-left: 0px }
#div_816e_4{border-left-style: none;float: left;text-align: left; vertical-align: center;padding-top: 15px;margin-left: 0px;padding-left: 0px }
#h3_816e_0{font-family: ubuntu ;color: white;display: inline; padding-bottom: 4px }
#h3_816e_1{font-family: ubuntu ;color: blue; font-style: bold;display: inline; padding-bottom: 04px }
#div_816e_5{border-left-style: none; float: left;padding-left: 0px;padding-top: 0px }
#div_816e_6{border-left-style: none;padding-left: 0px }
#b_816e_0{width: 100%;border-left-style: none;padding-left: 0px }
#a_816e_0{color: white }
#b_816e_1{width: 100% }
#a_816e_1{color: white }
#b_816e_2{width: 100% }
#a_816e_2{color: white }
#b_816e_3{width: 100% }
#a_816e_3{color: white }
#b_816e_4{width: 100% }
#a_816e_4{color: white }
#b_816e_5{width: 100% }
#a_816e_5{color: white }
#b_816e_6{width: 100% }
#a_816e_6{color: white }
#div_816e_7{float: right;border-left-style: none;margin-right:0px;padding-top: 0px }
#a_816e_7{color: white }
#a_816e_8{color: white }
#a_816e_9{color: white }
#a_816e_10{color: white }
#a_816e_11{color: white }
#a_816e_12{color: white }
#a_816e_13{color: white }
#a_816e_14{color: white }
#div_816e_8{border-left-style: none; float: right;padding-top: 17px;padding-bottom: 0px }
#div_816e_9{float: right;padding-right: 22px }
#img_816e_0{background-color: black;border-radius:50%;border: 1px solid white }
#div_816e_10{clear: right; float: right }
#a_816e_15{color: white }
#h2_816e_0{font-size: 60px; font-family: raleway, sans-serif;clear: both; display: block }
#div_816e_11{margin-top:4%; margin-left: 8%; margin-right: 4%; float:left }
#div_816e_12{width:300px; height:200px; text-align: center }
#div_816e_13{font-size: 20px; text-align: center; font-family: sans-serif }
#div_816e_14{margin-top:4%; margin-left: 4%; margin-right: 4%; float:left }
#div_816e_15{width:300px; height:200px; text-align: center }
#div_816e_16{font-size: 20px; text-align: center; font-family: sans-serif }
#div_816e_17{margin-top:4%;margin-left: 4%; margin-right: 4%; float:left }
#div_816e_18{width:300px; height:200px; text-align: center }
#div_816e_19{font-size: 20px; text-align: center; font-family: sans-serif }
#div_816e_20{margin-left: 8%; margin-right: 8%; float:left }
#div_816e_21{width:300px; height: 200px; text-align: center }
#div_816e_22{font-size: 20px; text-align: center; font-family: sans-serif }
#div_816e_23{margin-left: 1%; margin-right: 4%; float:left }
#div_816e_24{width:300px; height:200px; text-align: center }
#div_816e_25{font-size: 20px; text-align: center; font-family: sans-serif }
#div_816e_26{margin-left: 4%; margin-right: 4%; float:left }
#div_816e_27{width:300px; height:200px; text-align: center }
#div_816e_28{font-size: 20px; text-align: center; font-family: sans-serif }

</style>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="w3-white" >



<br><br>
<header id="header">
  <div >
   <center><h2 id="h2_816e_0">Gardening Supplies and Tools</h2></center>
  </div>
  <div id="div_816e_11">
    <a href="WheelBarrowTool.php"><img src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2018/6/4/2/CI_Gardeners-Supply-Co_Two-Wheel-Wheelbarrow.jpg.rend.hgtvcom.966.725.suffix/1528130692145.jpeg" width="300px" height="300px" class="img-thumbnail"></a>
    <div id="div_816e_12">
                  <div id="div_816e_13">
                    <h1>Wheelbarrow</h1>
                  </div>
          <p>This two wheel wheelbarrow updates the classic single-wheel version with a design that’s still a breeze to maneuver.</p>
  </div>
  </div>
  <div id="div_816e_14">
    <img src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2018/6/4/2/Original_Julie-Martens-Forney_Garden-trowels.JPG.rend.hgtvcom.966.725.suffix/1528130692052.jpeg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left>
    <div id="div_816e_15">
                  <div id="div_816e_16">
                    <h1>Garden Trowels</h1>
                  </div>
          <p>Digging is at the heart of gardening, and one of the quickest ways to tuck seedlings into soil is with a hand trowel.</p>
  </div>
  </div>

  <div id="div_816e_17">
    <img src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2018/6/4/2/Original_Julie-Martens-Forney_Garden-gloves.JPG.rend.hgtvcom.966.725.suffix/1528130692709.jpeg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left>
    <div id="div_816e_18">
                  <div id="div_816e_19">
                    <h1>Garden Gloves</h1>
                  </div>
          <p>Leather gloves are a must for cold- or wet-weather gardening, as well as dealing with roses or other thorny plants.</p>
  </div>
  </div>
  <div id="div_816e_20">
    <img src="http://markcullen.com/wp-content/uploads/2015/02/2015_pruner.jpg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left>
    <div id="div_816e_21">
                  <div id="div_816e_22">
                    <h1>Hand Pruners</h1>
                  </div>
          <p>Cutting tools are vital to successful gardening. Start with the dynamic duo of hand pruners or shears and loppers.</p>
  </div>
  </div>

    <div id="div_816e_23">
    <img src="http://www.kentandstowe.com/Crest/media/site-images/products/misc/k-S-Garden-Life-Hand-Fork-LR.jpg?ext=.jpg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left>
    <div id="div_816e_24">
                  <div id="div_816e_25">
                    <h1>Garden Forks</h1>
                  </div>
          <p>Garden forks may or may not be a must-have tool for you, depending on what your grow and how you garden.</p>
  </div>
  </div>

    <div id="div_816e_26">
    <img src="https://hgtvhome.sndimg.com/content/dam/images/hgtv/fullset/2018/6/4/2/CI_Fiskars_PowerGear-Loppers.jpg.rend.hgtvcom.966.644.suffix/1528130692448.jpeg" width="300px" height="300px" class="img-thumbnail" position=absolute float=left>
    <div id="div_816e_27">
                  <div id="div_816e_28">
                    <h1>Power Loppers</h1>
                  </div>
          <p>For pruning branches over ¾ inches thick, you’re going to need some loppers, used for pruning shrubs</p>
  </div>
  </div>
 </div>


    </body>
    </html>