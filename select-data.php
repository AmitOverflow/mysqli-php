<?php

include "config/db_config.php";



// Connect to the database
$connection = mysqli_connect($servername, $username, $password, $dbname);
// Check connection , print error if something goes wrong
if (!$connection) {
    die("Could not connect: " . mysqli_connect_error());
}
// Select data from the Users Database
$sql = "SELECT Name, Location,  Email FROM Users";
$result = mysqli_query($connection, $sql);
//Show records if more then 0
if (mysqli_num_rows($result) > 0) {
    
    while($row = mysqli_fetch_assoc($result)) {
        echo "Name: " . $row["Name"]. " - Location: " . $row["Location"]. " " Email :".$row["Email"]. "<br>";
    }
} else {
    echo "0 records found";
}

mysqli_close($connection);
?>
