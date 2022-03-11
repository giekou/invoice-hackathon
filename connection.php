<?php
$servername = "localhost";
$username = "root";
$password = null;
$dbname = "hackathon";


function connect_to_mysqli($servername, $username, $password, $db_name){
	$connect = mysqli_connect($servername, $username, $password, $db_name);
	if (!$connect) {
		  die("Connection failed mysql: " . mysqli_connect_error());
	}
	return $connect;	
}




$sql = "INSERT INTO request (id,po_number,latest_status,submitted_date,expected_done_date)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 