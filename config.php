<?php
$servername = "localhost"; // replace with your server name
$username = "root"; // replace with your username
$password = ""; // replace with your password
$dbname = "mock_exam"; // replace with your database name

// create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully!";

?>
