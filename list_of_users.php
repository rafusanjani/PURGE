  <?php 
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/app.css">
</head>
<body>


	<?php

	  $records = $conn->query("SELECT phone_number, name, price, status, tx_ref FROM payments,users WHERE users.id = payments.id");

	 ?>

	<div class="container">

		<h2align ="center"><font color ="blue" face = arial, helvetica, cambia>Purge Transportation And Logistics Ltd</h2>
		<hr>
		<table class="table">

			<thead>
				<th>Name</th> <th>Price</th>  <th>Status</th>        <th>Payment Reference</th>
			</thead>

			<tbody>
				 <?php

				   if($records){

				   	 foreach ($records as $key => $value) {

				   	 	$name = $value["name"];
				   	 	$price = $value["price"];
				   	 	$status = $value["status"];
				   	 	$tx_ref = $value["tx_ref"];
				   	 	 echo "
				   	 	 <tr> 
				   	 	    
				   	 	    <td>$name </td>
				   	 	    <td>$price </td>
				   	 	    <td>$status </td>
				   	 	    <td>$tx_ref  </td>

				   	 	    
 
				   	 	  </tr>
				   	 	 ";
				   	 }




				   }else{
				   	echo "Bad queery: ".$conn->error;
				   } 


				  ?>
			</tbody>


		</table>
	</div>



</body>
</html>

