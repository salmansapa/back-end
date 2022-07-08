<html>
  <head>
    <title>European space agency</title>
	</head>
	
	 <body class="body">
	 <style>
	 .body{
		 background-color:		#FAEBD7;
	 }
	 </style><!-- this is the code for the title of the website -->
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

		<h1>Add a mission</h1>
		
		<?php
		// this is the code for the database where we have connected the website with database using mysqli_connect and if it would be error it will not get connected to database
		$host ="localhost";
		$username ="root";
		$password ="";
		$database_name ="esa";
		$link = mysqli_connect($host, $username, $password, $database_name);
		  if($link ===false) {
		  die("error: could not connect");
		  }
		  ?>
		  
		  <form method="post">
		   <label>mission name</label><br>
		   <input type="text" name="mission_name"><br><br>
		   
		   <label>mission destination:</label><br>
		   <input type="text" name="mission_destination"><br><br>
		   
		   <label>launch date:</label><br>
		   <input type="date" name="launch_date"><br><br>
		   
		   <label>end date </label><br>
		   <input type="date" name="end_date"><br><br>
		   
		   <label>select target:</label>
		   <select name="target_id">
			  <?php
			  // thsi is the code for linking the target 
				$sql = mysqli_query($link, "SELECT target_id, target_name FROM target");
				while ($row = $sql->fetch_assoc() ){
				echo "<option value='{$row['target_id']}'>{$row['target_name']}</option>";
				}
			 ?>
			</select><br><br>
			
			<label>select astronaut:</label>
		    <select name="astronaut_id">
			<?php
			// this is the code for selecting te astronaut.
			$sql = mysqli_query($link, "SELECT astronaut_id, astronaut_name FROM astronaut");
			while ($row = $sql->fetch_assoc() ){
			echo "<option value='{$row['astronaut_id']}'>{$row['astronaut_name']}</option>";
			}
			?>
			</select><br><br>
			
			
		   <input type="submit" name="submit">
		 
	</form>

	<?php
	// this code is for variables to get the output we need to give the correct information.
		$mission_name =$_POST['mission_name'];
		$mission_destination = $_POST['mission_destination'];
		$launch_date =$_POST['launch_date'];
		$end_date =$_POST['end_date'];
		$target_id =$_POST['target_id'];
		$astronaut_id =$_POST['astronaut_id'];
		
		$sql = "INSERT INTO mission (mission_name, mission_destination, launch_date, end_date, target_id, astronaut_id) VALUES ('$mission_name','$mission_destination','$launch_date','$end_date','$target_id','$astronaut_id')";
	// this code for connecting with mysqli query
		if (mysqli_query($link, $sql)) {
			echo "mission has been added";
		}else {
			echo "error:problem adding mission";
		}
		
		mysqli_close($link);
		?>
	
	</body> 
	 </html>