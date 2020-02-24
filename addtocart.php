<?php
session_start();
?>


<?php


				$db=mysqli_connect('localhost','root','','new');
				if(!$db){
					die("Connection failed" . mysqli_connect_error());
				}
				if(isset($_SESSION["t3"])){
					$r=$_SESSION["t3"];
					$AddID=$_GET["Addid"];
					$count=0;
					$Quantity=$_GET["quantity"];
					$sql="SELECT * FROM cart where CID= \"$r\" and AddID=\"$AddID\"";
					$results=mysqli_query($db,$sql);
					if(mysqli_num_rows($results)!=0){
						while($row=mysqli_fetch_assoc($results)){

						$Quantity=$Quantity+$row['QuantityOrdered'];

						$db=mysqli_connect('localhost','root','','new');
						$sqli="UPDATE cart set QuantityOrdered=\"$Quantity\" where CID=\"$r\" and AddID=\"$AddID\"";
						}
					}
					else{
						$db=mysqli_connect('localhost','root','','new');
						$sqli="Insert into cart(CID,AddID,QuantityOrdered) values('$r','$AddID','$Quantity')";
					}
					$results=mysqli_query($db,$sqli);
					mysqli_close($db);$count=$count+1;
					header("location:NurseryOne.php?count=".$count);

      			}
      			else{
					$count=$count-1;
					header("location: Sign In.php?count=".$count); 

				}
?>