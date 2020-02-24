<?php
session_start();
$db=mysqli_connect('localhost','root','','new');$count=0;
if(!$db){
          die("Connection failed" . mysqli_connect_error());
        }
$fid=$_REQUEST['fid'];
$info=$_REQUEST['ta'];
$query="INSERT INTO edit(Fid,Aid,Information) VALUES('$fid','A1','$info')";
$results=mysqli_query($db,$query);
$count=$count+1;
header("Location:lily.php?count=".$count);
?>