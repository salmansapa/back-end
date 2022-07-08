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

		<h1>See all astronaut</h1>
		
		<?php
		// this code is for the database we have created and it is connected to mysqli connect.
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
		 <th width="100px">astroanut id<br><hr></th>
		 <th width="300px">astronaut name<br><hr></th>
		 <th width="300px">no_mission<br><hr></th>
		 </tr>
		 <?php
		 // this is the variable code connected to mysqli query.
		  $sql = mysqli_query($link, "SELECT astronaut_id, astronaut_name, no_mission FROM astronaut");
		  while ($row = $sql->fetch_assoc()){
			  echo "
			<tr>
				<th>{$row['astronaut_id']}</th>
				<th>{$row['astronaut_name']}</th>
				<th>{$row['no_mission']}</th>
			</tr>";
		    }
			?>
			</table>
		<?php
		// this code is for the to close the link.
		mysqli_close($link);
		?>
		
		 

	</body>
		
  </html>