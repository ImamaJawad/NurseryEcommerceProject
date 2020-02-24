<?php
session_start();
//dconnection established
$db=mysqli_connect('localhost','root','','new');
if(!$db){
	//connection failed
	die("Connection failed" . mysqli_connect_error());
}
$re=$_REQUEST["rid"];
$info=$_REQUEST['info'];
$fid=$_REQUEST['fid'];
$edit=$_REQUEST['edit'];
//query
$query="update flower set Information='$info' where Fid='$fid';delete from edit where EditID='$edit'";
$results=mysqli_multi_query($db,$query);
//connection closed
mysqli_close($db);
header('Location:admin.php?ret="'.$re.'"');
?>