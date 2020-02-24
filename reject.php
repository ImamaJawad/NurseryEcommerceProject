<?php
session_start();
$db=mysqli_connect('localhost','root','','new');
        if(!$db){
          die("Connection failed" . mysqli_connect_error());
        }
 $re=$_REQUEST["rid"];

        $edit=$_REQUEST['edit'];

        $query="delete from edit where EditID='$edit'";
        $results=mysqli_query($db,$query);

        mysqli_close($db);
        
      header('Location:admin.php?ret="'.$re.'"');
?>


