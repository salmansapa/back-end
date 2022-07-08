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

		<h1>See all missions</h1>
		
			<?php
			// this code is for the database connected to mysqli if we will give any wrong information we will receive a error. 
		$host ="localhost";
		$username ="root";
		$password ="";
		$database_name ="esa";
		$link = mysqli_connect($host, $username, $password, $database_name);
		 if ($link === false) {
			 die("error: could not connect");
		 }
		 ?>
		 <table>
		<tr> 
		 <th width="100px">Mission name<br><hr></th>
		 <th width="300px">Mission destination<br><hr></th>
		 <th width="300px">Launch date<br><hr></th>
		 <th width="300px">End date<br><hr></th>
		 <th width="300px">Target id<br><hr></th>
		 <th width="300px">astronaut id<br><hr></th>
		 </tr>
		 <?php
		 // this code is for the variables and these are different from others and also connected to mysqli.
		  $sql = mysqli_query($link, "SELECT mission_name, mission_destination, launch_date, end_date, target_id, astronaut_id FROM mission");
		  while ($row = $sql->fetch_assoc()){
			  echo "
			<tr>
				<th>{$row['mission_name']}</th>
				<th>{$row['mission_destination']}</th>
				<th>{$row['launch_date']}</th>
				<th>{$row['end_date']}</th>
				<th>{$row['target_id']}</th>
				<th>{$row['astronaut_id']}</th>
			</tr>
			";
		    }
			?>
			</table>
		<?php
		// thats the closing code for it.
		mysqli_close($link);
		?>

	</body>
		
  </html>