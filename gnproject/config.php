<?php


$mysqli=mysqli_connect("localhost", "root","123" ,"resident_database");

//check connection
if($mysqli===false){
    die("ERROR: COULD NOT CONNECT.".mysqli_connect_error());
}
echo "Connect Sucessfully.Host info".mysqli_get_host_info($mysqli);



?>