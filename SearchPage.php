<!DOCTYPE html>
<html>
<body>
<div id="searchresults">
	<p class= "searchresultshead">Search Results:</p>
<?php
$db=mysqli_connect('localhost','root','','new');

 $F=mysqli_real_escape_string($db,$_POST['search']);
  $sql= "select FName from flower where FName='$F'";

  $results=mysqli_query($db,$sql);
if (mysqli_num_rows($results)>0){
  echo "<table><tr><th></th></tr>";
  while($row=mysqli_fetch_assoc($results)){
    $row1=$row['FName'];
    $fr= ('<tr><td>'.$row1.'</td></tr>');
    header("location:plantsMain.php?r=".$fr);
  }
  echo "</table>";
}
else{
  $error="No match found";
    header("location:plantsMain.php?r=".$error);
  
}
mysqli_close($db);

?>
</body>
</html>