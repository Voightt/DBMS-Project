<?php
	$db = mysqli_connect("127.0.0.1", "kylevoight", "", "kylevoight");
// Do something with the connection $db
	if(mysqli_connect_errno()){
  	echo "Connect failed: " . my_sqli_connect_errno();
	}
?>