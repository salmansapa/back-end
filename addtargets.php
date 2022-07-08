<html>
  <head>
    <title>European space agency</title>
	</head>
	
	 <body class="body">
	 <style>
	 .body{
		 background-color:		#FAEBD7;
	 }
	 </style>
	 <!-- this is the code for the title of the website -->
	    <center><img src="esa.png"></img></center>
		<hr>
		
		<p>choose option below for information</p>
		<a href="index.php">homepage</a> | 
		<a href="addastronaut.php">Add a astronaut</a> | 
		<a href="addmission.php">Add a mission</a> | 
		<a href="addtargets.php">Add a target</a> | 
		<a href="seeastronaut.php">See all astronauts</a> | 
		<a href="seetargets.php">See all targets</a> | 
		<a href="seemission.php">See all missions</a>
		<hr>

		<h1>Add target</h1>
		<?php
			// this is the code for the database where we have connected the website with database using mysqli_connect and if it would be error it will not get connected to database
		$host ="localhost";
		$username ="root";
		$password ="";
		$database_name ="esa";
		$link = mysqli_connect($host, $username, $password, $database_name);
		 if($link === false) {
		die("error: could not connect");
		 }		
		?>
		
		<form method="post" action="addtargets.php">
		   <label>Target name</label><br>
		   <input type="text" name="target_name"><br>
		   <label>first mission</label><br>
		   <input type="text" name="first_mission"><br>
		   <label>Target type </label><br>
		   <input type="text" name="target_type"><br>
		   <label>Number of mission </label><br>
		   <input type="number" name="no_mission"><br>
		   <input type="submit" name="submit">
		</form>
		
		<?php
		// this is the code for the variables for connecting with each 
		
		$target_name = $_POST['target_name'];
		$first_mission = $_POST['first_mission'];
		$target_type =$_POST['target_type'];
		$no_mission =$_POST['no_mission'];
		
		
		// this is the code for indserting the target_name, first_mission, target_type,  and no_mission into target table.
		$sql = "INSERT INTO target (target_name, first_mission, target_type, no_mission) VALUES ('$target_name','$first_mission','$target_type','$no_mission')";
		// this is the code for running the query as if there is any issue adding the data it will show "problem adding target".
		if (mysqli_query($link, $sql)) {
			echo "target has been added";
		}else {
			echo "error:problem addding target";
		}
		
		?>

	</body>
		
  </html>

	