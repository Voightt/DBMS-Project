<?php
	$host = "127.0.0.1";
	$user = "kylevoight";
	$pw = "";
	$database = "kylevoight";
	
	$db = new mysqli($host, $user, $pw, $database);
	if ($db->connect_errno) {
		echo "Connect failed: ". $db->connect_error;
		exit();
	}
	
	if(isset($_REQUEST['idPerson'])){    $idPerson=$_REQUEST['idPerson'];  }
	if(isset($_REQUEST['LastName'])){    $LastName=$_REQUEST['LastName']; }
	if(isset($_REQUEST['FirstName'])){    $FirstName=$_REQUEST['FirstName'];  }
	if(isset($_REQUEST['JobTitle'])){    $JobTitle=$_REQUEST['JobTitle'];  }
	if(isset($_REQUEST['EmailAddress'])){		$EmailAddress=$_REQUEST['EmailAddress'];  }

	if(isset($_REQUEST['idPerson'])){ 
		$sql = "INSERT INTO `Person` (idPerson, LastName, FirstName, JobTitle, EmailAddress)
			VALUES ('$idPerson', '$LastName', '$FirstName', '$JobTitle', '$EmailAddress');";
		if ($db->query($sql) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . $db->error;
		}	
	}

	
	$sql = "SELECT * FROM `Person`;";	
	$result = $db->query($sql);
	if(!$result){
		echo "Bummer! " . $db->error;
	}
	else{
		echo "<br>The result has " . $result->num_rows. " rows.";
				
	
	//two methods
	$table = $result->fetch_all();
	//var_dump($table);
	echo "<table border = '1'>";
	foreach($table as $row){
		echo "<tr>";
		foreach($row as $value){
			echo "<td>$value</td>";
		}
		echo "</tr>";
	}
}

	
?>