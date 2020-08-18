<!-- December 9, 2019 Vasu Chalasani Lab-->

<?php

//this is the configuration page
$servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = mysqli_connect($servername, $username, $password);


if(!$conn) {
	die("Connection failed:" . mysqli_connect_error());
}

else {
 	//echo "Connected successfully";
}

?>