<?php
session_start();
?>


<?php
$db=mysqli_connect('localhost', 'root', '', 'new');
$imagename=$_GET['myimage']; 
$name=$_GET['name'];
$nid=$_GET['nid'];
$price=$_GET['price'];
$quantity=$_GET['quantity'];
$rid=$_GET['rid'];
$ct=$_GET['CategoryType'];
$ta=$_GET['ta'];
$pt=$_GET['ProductType'];
$num='1';
//Get the content of the image and then add slashes to it 
$imagetmp=addslashes ($_GET['myimage']);

//Insert the image name and image content in image_table
// $insert_image="INSERT INTO  VALUES('$imagetmp','$imagename')";
$query="INSERT INTO product (Pname) VALUES ('$name');";


$result=mysqli_query($db,$query);

	$last_id = mysqli_insert_id($db);
	echo "New record created successfully".$last_id;

if($_GET["ProductType"]==="Flower"){
$db=mysqli_connect('localhost', 'root', '', 'new');
 $insert_image="INSERT INTO flower(Fid,CategoryName,Information,FName,ImagePath) VALUES ('$last_id','$ct','$ta','$name','$imagetmp');INSERT INTO addition(Nid,Pid,Quantity,Price) VALUES ('$nid','$last_id','$quantity','$price');";

}
else
{
 $insert_image="INSERT INTO addition(Nid,Pid,Quantity,Price) VALUES ('$nid','$last_id','$quantity','$price');INSERT INTO tool(Tid,TName,Information,ImagePath) VALUES ('$last_id','$name','$ta','$imagetmp');";
}
$result=mysqli_multi_query($db,$insert_image);

header("Location:HomePage.php");
	mysqli_close($db);
 ?>
