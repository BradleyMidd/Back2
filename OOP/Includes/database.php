<?php
$servername = "localhost";
$hostname = "82737_back2";
$pass = "Bradley123!";

// Create connection
$conn = new mysqli($servername, $hostname, $pass);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

$sql = "INSERT INTO OOP (ID, $username, $password)
VALUES (NULL, 'Bradley', 'Middelijn')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>