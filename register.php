<!DOCTYPE html>


<?php require('config.php') ?>
<html>
<head>
    <meta charset="utf-8">
        <title>PURGE TRANSPORTATION AND LOGISTICS</title>
        <link rel="stylesheet" type="text/css" href="css/app.css">
    

<body >
     <?php include 'header.php'; ?>
    
<main class="py-4">
        <div class="container">

    <main class="py-4">
        <div class="container">

        	<h2>REGISTRATION</h2>
        	<hr>

        	<form method="POST" action="save_user.php">
        		<div class="row">
        			<div class="col-md-6">
        				<label>Name</label><br>
        				<input type="text" name="person_name" class="form-control" required>

        				<label>Phone Number</label><br>
        				<input type="text" name="phone_number" placeholder="+256777777777" class="form-control" required>

        				<label>Email</label><br>
        				<input type="email" name="email_address" class="form-control" required>

        				<!-- read districts -->

        				<?php 

        				$results = $conn->query("SELECT ID, NAME FROM payments ORDER BY ID ASC");
        				 ?>

        				

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


        				<button type="submit" class="btn btn-danger">SUBMIT</button>

        			</div>
        		</div>
                <div id="footer">
    <h4>+256 786964345 &bull; <a href="home.php">Naalya Town, Metroplex-Kiwatule  </a></h4>
    <p>Hours of Operation&nbsp;&nbsp;&bull;&nbsp;&nbsp;Mon - Sun: 10:00 am - 12:00 am</p>
    <a href="index.php"><img src="images/purge3.jpg" alt=" RAF'S M BUSES" width="50" length="50" /></a>
    <p>&copy; Copyright 2021 PURGE TRANSPORTATION AND LOGISTICS | All Rights Reserved <br /></p>
</div>

</div>
</body>
</html>
        	</form>

        </div>
    </main>

</body>
</html>