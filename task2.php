
<?php
session_start();
?>
<?php


 
	//$con = mysqli_connect("localhost", "root", "", "buildit");
	$UID=$_POST['t3'];
	$password=$_POST['p1'];
	$type=$_POST['r1'];
	$p=trim($password);
	$count=0;
	$db = mysqli_connect("localhost", "root", "", "new");
	if ($type==="Retailer"){
		$query="SELECT * FROM retailer WHERE RID=\"$UID\" and Password=\"$p\"";
	}
	else if($type==="Customer"){
		$query="SELECT * FROM customer WHERE CID=\"$UID\" and Password=\"$p\"";
	}
	else{
		$query="SELECT * FROM administrator WHERE AID=\"$UID\" and Password=\"$p\"";
	}
	
	$result=mysqli_query($db,$query);
	$row= mysqli_num_rows($result);
	
	if($row!=0){
		if($type==="Customer"){
		header("location: HomePage.php");$_SESSION['t3'] = $_POST['t3'];}
		else if($type==="Retailer"){
			header("location: HomePage.php?ret=$UID");$_SESSION['r1'] = $_POST['r1'];
		}
		else if($type==="Administrator"){
			header("location: HomePage.php?ret=$UID");$_SESSION['r1'] = $_POST['r1'];
		}
	}
	else{
		$count=$count+1;
		header("location: Sign In.php?count=".$count); 
	}



 ?>