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

	  $records = $dbConnection->query("SELECT phone_number, name FROM payments,users WHERE users.id = payments.id");

	 ?>

	<div class="container">

		<h2>Purge Transportation And Logistics Ltd</h2>
		<hr>
		<table class="table">

			<thead>
				<th>Phone Number</th> <th>Name</th> <th>Number of Tickets</th>
			</thead>

			<tbody>
				 <?php

				   if($records){

				   	 foreach ($records as $key => $value) {

				   	 	$phone = $value["phone_number"];
				   	 	$name = $value["name"];
				   	 	
				   	 	 echo "
				   	 	 <tr> 
				   	 	    <td>$phone </td>
				   	 	    <td>$name </td>
				   	 	    
 
				   	 	  </tr>
				   	 	 ";
				   	 }




				   }else{
				   	echo "Bad queery: ".$dbConnection->error;
				   } 


				  ?>
			</tbody>


		</table>
	</div>



</body>
</html>
