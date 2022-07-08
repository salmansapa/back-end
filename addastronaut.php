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
		<!-- this is the code for linking the webpages -->
		<p>choose option below for information</p>
		<a href="index.php">homepage</a> | 
		<a href="addastronaut.php">Add a astronaut</a> | 
		<a href="addmission.php">Add a mission</a> | 
		<a href="addtargets.php">Add a target</a> | 
		<a href="seeastronaut.php">See all astronauts</a> | 
		<a href="seetargets.php">See all targets</a> | 
		<a href="seemission.php">See all missions</a>
		<hr>

		<h1>Add astronaut</h1>

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
		
		<form method="post" action="addastronaut.php">
		   <label>astronaut name</label><br>
		   <input type="text" name="astronaut_name"><br>
		   <label>Number of missions</label><br>
		   <input type="number" name="no_mission">
		   <input type="submit" name="submit">
		</form>
		
		<?php
		// this is the code for the variables
		$astronaut_name = $_POST['astronaut_name'];
		$no_mission = $_POST['no_mission'];
		
		
		// this is the code for indserting the astronaut_name and no_mission into astronaut table
		$sql = "INSERT INTO astronaut (astronaut_name, no_mission) VALUES ('$astronaut_name','$no_mission')";
		// this is the code for running the query as if there is any issue adding the data it will show "problem adding astronaut".
		if (mysqli_query($link, $sql)) {
			echo "astronaut has been added";
		}else {
			echo "error:problem adding astronaut";
		}
		
		mysqli_close($link);
		?>

	</body>
		
  </html>