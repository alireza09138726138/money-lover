  <?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE makharej";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$conn->close();
?>
<br> 
 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "makharej";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE produ (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
Limite VARCHAR(30) NOT NULL,
bank VARCHAR(30) NOT NULL,
Price VARCHAR(30) NOT NULL,
Comment VARCHAR(100) NOT NULL,
amount VARCHAR(100) NOT NULL,
cost VARCHAR(30) NOT NULL,
year VARCHAR(30) NOT NULL,
month VARCHAR(30) NOT NULL,
day VARCHAR(30) NOT NULL,
Account VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
user_id VARCHAR(30) NOT NULL,
date VARCHAR(30) NOT NULL

)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
echo '<br>';

// sql to create table
$sql = "CREATE TABLE checkk (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
person VARCHAR(30) NOT NULL,
number VARCHAR(30) NOT NULL,
Amount VARCHAR(100) NOT NULL,
gender VARCHAR(100) NOT NULL,
gender1 VARCHAR(100) NOT NULL,
pay VARCHAR(30) NOT NULL,
datealarm VARCHAR(30) NOT NULL,
Comment VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
user_id VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
echo '<br>';
// sql to create table
$sql = "CREATE TABLE user (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
password VARCHAR(30) NOT NULL,
email VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}



echo '<br>';


// sql to create table
$sql = "CREATE TABLE bank (
id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
bank VARCHAR(50) NOT NULL,
Account VARCHAR(50) NOT NULL,
cost VARCHAR(30) NOT NULL,
Limite VARCHAR(30) NOT NULL,
username VARCHAR(30) NOT NULL,
user_id VARCHAR(30) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

echo '<br>';


$conn->close();
?> 

