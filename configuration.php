<?php
$servername ="sql7.freemysqlhosting.net";
$username ="sql7539470";
$password ="7cFyHihYHx";
$dbname ="sql7539470";
$portno = 3306;

//create connection
$conn = new mysqli($servername, $username, $password, $dbname, $portno);

//connection check
if ($conn->connect_error) {
	die("Connection failed". $conn->connect_error);
}
?>