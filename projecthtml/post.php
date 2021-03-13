<?php


$nameq = $_POST['nameq'];
$namew = $_POST['namew'];
$namee = $_POST['namee'];
$genderq = $_POST['genderq'];
$genderw = $_POST['genderw'];
$namer = $_POST['namer'];
$gendere = $_POST['gendere'];
$message = $_POST['message'];




$servername = "localhost";
$username = "root";
$password = "";
$dbname = "baseusers";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql = "INSERT INTO home (nameq, namew, namee, genderq, genderw, namer, gendere, message)
VALUES ('$nameq', '$namew', '$namee', '$genderq', '$genderw', '$namer', '$gendere', '$message')";


if ($conn->query($sql) === TRUE)	{
	echo "даные отправленые";
}	else	{
	echo "Error: " . $sql . "<br>" . $conn->error; 
}

$conn->close();
?>