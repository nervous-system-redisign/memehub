<?php
	    
$servername = "ftp.gear.host";
$username = "memehub\$memehub";
$password = "KvhFBGA4QkdisgNDa2SL1jllvPRJ0twXZ5zscijbkHba4aqrKuSboDPPF8ia";
$dbname = "memehubaccounts;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
} 
		
$sql = "CREATE TABLE Accounts(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
	echo "Table Accounts Created Successfully";
} else {
	echo "Error Creating table: " . $conn->error;
}
?>