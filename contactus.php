<!DOCTYPE html>
<html>

<?php require('config.php') ?>
<head>
	<head>
        <meta charset="utf-8">
        <title>Contact us</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
    </head>
    <body>
     <?php include 'header.php'; ?>
        <span id="app"></span>

        <main class="py-4">
            <div class="container">

        	<h2>PURGE TRANSPORTATION AND LOGISTICS LTD</h2>
        	<hr>

        	<form method="POST" action="ininiate.php">
        		<div class="row">
                    
        			<div class="col-md-6">

        				<label>Name</label><br>
        				<input type="text" name="person_name" class="form-control" required>

        				<label>Phone Number</label><br>
        				<input type="text" name="phone_number" placeholder="+256772123456" class="form-control" required>
                    
        				<label>Email</label><br>
        				<input type="email" name="email_address" class="form-control" required>

        				<!-- read districts -->

        				<?php 

        				$results = $dbConnection->query("SELECT ID, NAME FROM payments ORDER BY ID ASC");
        				 ?>

        				<label>District</label><br>
        				<select class="form-control" name="district_id"></br>

        					<?php 

        					foreach ($results as $key => $value) {

	                           $id = $value["ID"];
	                           $name = $value["NAME"];

	                           echo "<option value='$id'>$name</option>";

	                        }


        					 ?>
        				</select>
     
                        
        				<br>

        				<label>Password</label><br>
        				<input type="password" name="user_password" class="form-control" required>

        				<label>Confirm Password</label><br>
        				<input type="password" name="confirm_user_password" class="form-control" required>

        				<hr>


        				<button type="submit" class="btn btn-danger">Register</button> 

        			</div>
        		</div>
        	</form>

        </div>
    </main>
    <div id="footer">
    <h4>+256 786964345 &bull; <a href="ome.php">Naalya Town, Metroplex-Kiwatule  </a></h4>
    <p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
    
    <p>&copy; Copyright 2021 PURGE TRANSPORTATION AND LOGISTICS | All Rights Reserved <br /></p>
</div>

</body>
</html>