

<?php
 $db=mysqli_connect('localhost','root','','new');
$count=0;

if(isset($_POST['b1'])){
	$Fname=mysqli_real_escape_string($db,$_POST['t1']);
		$Lname=mysqli_real_escape_string($db,$_POST['t2']);
	$email=mysqli_real_escape_string($db,$_POST['e1']);
	$UserID=mysqli_real_escape_string($db,$_POST['t3']);
	$Password=mysqli_real_escape_string($db,$_POST['p1']);
	$type=mysqli_real_escape_string($db,$_POST['r1']);
	if ($type==="Retailer"){
		if($Fname==="" or $Lname==="" or $Password===""){
			$sql ="INSERT INTO user (UID) VALUES ('$UserID');INSERT INTO retailer (Rid,Fname,Lname,EmailID,Password) VALUES ('$UserID',default,default,'$email',default)";
		}
		else{
			$sql ="INSERT INTO user (UID) VALUES ('$UserID');INSERT INTO retailer (Rid,Fname,Lname,EmailID,Password) VALUES ('$UserID','$Fname','$Lname','$email','$Password')";
	$count=$count+1;}
		}

		
	else if($type==="Customer"){
		if($Fname==="" or $Lname==="" or $Password===""){
		$sql ="INSERT INTO user (UID) VALUES ('$UserID');INSERT INTO customer (Cid,Fname,Lname,EmailID,Password) VALUES ('$UserID',default,default,'$email',default)";
	}
		else{
			$sql ="INSERT INTO user (UID) VALUES ('$UserID');INSERT INTO customer (Cid,Fname,Lname,EmailID,Password) VALUES ('$UserID','$Fname','$Lname','$email','$Password')";
			$count=$count+1;
					}}
	else{
		if($Fname==="" or $Lname==="" or $Password===""){
		$sql ="INSERT INTO user (UID) VALUES ('$UserID');INSERT INTO administrator (Aid,Fname,Lname,EmailID,Password) VALUES ('$UserID',default,default,'$email',default)";
	}
	else{$sql ="INSERT INTO user (UID) VALUES ('$UserID');INSERT INTO administrator (Aid,Fname,Lname,EmailID,Password) VALUES ('$UserID','$Fname','$Lname','$email','$Password')";
$count=$count+1;}
}




//IF ALREADY EXISTS?
mysqli_multi_query($db,$sql);

header("Location:HomePage.php?count=".$count);
}

?>
