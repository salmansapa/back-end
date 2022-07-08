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

		<h1>See all targets</h1>
		
			<?php
			// thats the code for the database connected to mysqli same as others.
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
		 <th width="100px">Target name<br><hr></th>
		 <th width="300px">First mission<br><hr></th>
		 <th width="300px">Target type<br><hr></th>
		 <th width="300px">Number of mission<br><hr></th>
		 </tr>
		 <?php
		 // thats the code for the vaiables of seetarget and different from others connected to mysqli query. 
		  $sql =mysqli_query($link, "SELECT target_name, first_mission, target_type, no_mission FROM target");
		  while ($row = $sql->fetch_assoc()){
			  echo "
			<tr>
				<th>{$row['target_name']}</th>
				<th>{$row['first_mission']}</th>
				<th>{$row['target_type']}</th>
				<th>{$row['no_mission']}</th>
			</tr>
			";
		    }
			?>
			</table>
		<?php
		// thats the closing code for mysqli.
		mysqli_close($link);
		?>

	</body>
		
  </html>