<?php
include "config/db_config.php";

//Connect to the Database
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check your Database connection
//Print the error if something goes wrong
if (!$connection) 
{
    die("Could not connect to Database: " . mysqli_connect_error());
}

// Now create Users table
$sql = "CREATE TABLE Users(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) NOT NULL,
Location VARCHAR(30) NOT NULL, is
email VARCHAR(50),
reg_date TIMESTAMP
)";

if (mysqli_query($connection, $sql)) {
    echo "Table Users has been created successfully";
} else {
    echo "Could not create table: " . mysqli_error($conn);
}

mysqli_close($connection);
?>
