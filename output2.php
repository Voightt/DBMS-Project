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
	
	
	if(isset($_REQUEST['idIncident_Info'])){    $idIncident_Info=$_REQUEST['idIncident_Info'];  }
	if(isset($_REQUEST['DateCreated'])){		$DateCreated=$_REQUEST['DateCreated'];  }
	if(isset($_REQUEST['IncidentState'])){    $IncidentState=$_REQUEST['IncidentState']; }
	if(isset($_REQUEST['Incident_Type_idIncident_Type'])){    $Incident_Type_idIncident_Type=$_REQUEST['Incident_Type_idIncident_Type'];  }
	if(isset($_REQUEST['Handeler_idHandeler'])){    $Handeler_idHandeler=$_REQUEST['Handeler_idHandeler'];  }
	
	if(isset($_REQUEST['idIncident_Info'])){ 
		$sql2 = "INSERT INTO `Incident` (idIncident_Info, DateCreated, IncidentState, Incident_Type_idIncident_Type, Handeler_idHandeler)
			VALUES ('$idIncident_Info', '$DateCreated', '$IncidentState', '$Incident_Type_idIncident_Type', '$Handeler_idHandeler');";
		if ($db->query($sql2) === TRUE) {
			echo "New record created successfully";
		} else {
			echo "Error: " . $sql2 . "<br>" . $db->error;
		}	
	}
	
		
		$sql2 = "SELECT * FROM `Incident`;";	
	$result = $db->query($sql2);
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