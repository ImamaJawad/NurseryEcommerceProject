<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php
session_start();
$db=mysqli_connect('localhost','root','','new');
				if(!$db){
					die("Connection failed" . mysqli_connect_error());
				}
				$cid=$_SESSION['t3'];
				print_r($_SESSION['t3']);
				$sql="DELETE FROM cart where CID=\"$cid\"";
				$results=mysqli_query($db,$sql);
				
echo '<script>
      $(document).ready(function(){alert("Your Order Has Been Confirmed!");
      window.location.href = "HomePage.php";
      })</script>';


?>

