<!DOCTYPE html>
<html>
	<head>
		<title>Database</title>
	</head>
	
	<body>
	<p>Person</p>
	<table style ='text-align:left;'border='1'>
		<tr><th>idPerson</th><th>LastName</th>
			<th>FirstName</th><th>JobTitle</th>
			<th>EmailAddress</th></tr>
			
			<?php require'conn.php';
			$sql = "select * from Person";
			$result = $db->query($sql);
			$datarow = mysqli_num_rows($result);
			for($i=0;$i<$datarow;$i++){
			$result_arr = mysqli_fetch_assoc($result);
			$idPerson = $result_arr['idPerson'];
			$LastName = $result_arr['LastName'];
			$FirstName = $result_arr['FirstName'];
			$JobTitle = $result_arr['JobTitle'];
			$EmailAddress = $result_arr['EmailAddress'];
			echo"<tr><th>$idPerson</th> <th>$LastName</th>
			<th>$FirstName</th><th>$JobTitle</th>
			<th>$EmailAddress</th></tr>";
			}
			?>
			
	</table>
			<br>
			
	<p>Incident</p>
	<table style ='text-align:left;'border='1'>
		<tr><th>idIncident_Info</th><th>DateCreated</th>
			<th>IncidentState</th><th>Incident_Type_idIncident_Type</th>
			<th>Handeler_idHandeler</th>
			
			<?php require'conn.php';
			$sql = "select * from Incident";
			$result = $db->query($sql);
			$datarow = mysqli_num_rows($result);
			for($i=0;$i<$datarow;$i++){
			$result_arr = mysqli_fetch_assoc($result);
			$idIncident_Info = $result_arr['idIncident_Info'];
			$DateCreated = $result_arr['DateCreated'];
			$IncidentState = $result_arr['IncidentState'];
			$Incident_Type_idIncident_Type = $result_arr['Incident_Type_idIncident_Type'];
			$Handeler_idHandeler = $result_arr['Handeler_idHandeler'];
			echo"<tr><th>$idIncident_Info</th> <th>$DateCreated</th>
			<th>$IncidentState</th><th>$Incident_Type_idIncident_Type</th>
			<th>$Handeler_idHandeler</th></tr>";
			}
			?>
	</table>
			<br>

			
	<p>Handeler</p>
	<table style ='text-align:left;'border='1'>
		<tr><th>idHandeler</th><th>emailAdress</th>
			
			<?php require'conn.php';
			$sql = "select * from Handeler";
			$result = $db->query($sql);
			$datarow = mysqli_num_rows($result);
			for($i=0;$i<$datarow;$i++){
			$result_arr = mysqli_fetch_assoc($result);
			$idHandeler = $result_arr['idHandeler'];
			$emailAdress = $result_arr['emailAdress'];
			echo"<tr><th>$idHandeler</th><th>$emailAdress</th></tr>";
			}
			?>
	</table>
			<br>
			
	<p>Incident_Person</p>
	<table style ='text-align:left;'border='1'>
		<tr><th>idIncident</th><th>Person_idPerson</th>
			<th>Incident_Info_idIncident_Info</th>
			
			<?php require'conn.php';
			$sql = "select * from Incident_Person";
			$result = $db->query($sql);
			$datarow = mysqli_num_rows($result);
			for($i=0;$i<$datarow;$i++){
			$result_arr = mysqli_fetch_assoc($result);
			$idIncident = $result_arr['idIncident'];
			$Person_idPerson = $result_arr['Person_idPerson'];
			$Incident_Info_idIncident_Info = $result_arr['Incident_Info_idIncident_Info'];
			echo"<tr><th>$idIncident</th><th>$Person_idPerson</th>
			<th>$Incident_Info_idIncident_Info</th></tr>";
			}
			?>
	</table>
			<br>
			
	<p>IP_Address</p>
	<table style ='text-align:left;'border='1'>
		<tr><th>idIP_Address</th><th>Incident_idIncident_Info</th>
			<th>Address</th>
			
			<?php require'conn.php';
			$sql = "select * from IP_Address";
			$result = $db->query($sql);
			$datarow = mysqli_num_rows($result);
			for($i=0;$i<$datarow;$i++){
			$result_arr = mysqli_fetch_assoc($result);
			$idIP_Address = $result_arr['idIP_Address'];
			$Incident_idIncident_Info = $result_arr['Incident_idIncident_Info'];
			$address = $result_arr['address'];
			echo"<tr><th>$idIP_Address</th><th>$Incident_idIncident_Info</th>
			<th>$address</th></tr>";
			}
			?>
	</table>
			<br>
			
		<p>Incident_Type</p>
	<table style ='text-align:left;'border='1'>
		<tr><th>idIncident_Type</th><th>Type</th>
		
			<?php require'conn.php';
			$sql = "select * from Incident_Type";
			$result = $db->query($sql);
			$datarow = mysqli_num_rows($result);
			for($i=0;$i<$datarow;$i++){
			$result_arr = mysqli_fetch_assoc($result);
			$idIncident_Type= $result_arr['idIncident_Type'];
			$Type= $result_arr['Type'];
			echo"<tr><th>$idIncident_Type</th><th>$Type</th></tr>";
			}
			?>
	</table>
			<br>		
	</body>

</html>