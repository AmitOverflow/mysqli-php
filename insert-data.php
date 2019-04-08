<?php
include "config/db_config.php";



// Connect to Database
$connection = mysqli_connect($servername, $username, $password, $dbname);

// Check connection and print the error if something goes wrong
if (!$connection) 
{
    die("Could not connect: " . mysqli_connect_error());
}
// insert data into the Users Database 


$sql = "INSERT INTO Users (Name, Location, Email)
VALUES ('Amit', 'India', 'amit@amitverma.me')";

if (mysqli_query($connection, $sql)) {
    echo "Data inserted successfully";

}
else {echo "Error : something went wrong.";}

mysqli_close($connection);
?>
