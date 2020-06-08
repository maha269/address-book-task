<?php
$conn = mysqli_connect("127.0.0.1", "root", "", "test");

if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit;
}
// sql to create table
$sql1 = "CREATE TABLE addressbook (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
firstname VARCHAR(30) NOT NULL,
email VARCHAR(30),
street VARCHAR(50)  NOT NULL,
zip_code VARCHAR(50)  NOT NULL,
city VARCHAR(50)  NOT NULL,
created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
// sql to create table
$sql2 = "CREATE TABLE cities (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(30) NOT NULL,
created_at TIMESTAMP  DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql1) === TRUE && $conn->query($sql1) === TRUE  ) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

//echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
//echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;

mysqli_close($conn);
?>