<div >
				<?php
				$db=mysqli_connect('localhost','root','','new');
				if(!$db){
					die("Connection failed" . mysqli_connect_error());
				}
				$sql="SELECT * FROM nurseries inner join addition on nurseries.Nid=addition.Nid inner join retailer on nurseries.Rid=retailer.Rid inner join product on addition.Pid=product.Pid";
				$results=mysqli_query($db,$sql);




				mysqli_close($db);
				?>
				</div>
			 <div style="clear:both">

        <h1>Add nurseries</h1>
        <p>
          
        </p>
      </div>