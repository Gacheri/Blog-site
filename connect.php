<?php

$severname="localhost";
$username="root";
$password="roots1";
$dbname="tablet";

$conn=mysqli_connect ($severname, $username, $password ,$dbname) or die ("unable to connect to host");
//  $sql =mysqli_select_db ('$dbname',$conn) or die ("unable to connect to database");


include "connect.php";
if($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
$query = "INSERT INTO article VALUES ('test','test1')";

if ($conn->query($sql) === TRUE) {
    echo "record inserted successfully";
} else{
    echo "Error: " . $sql . "<br>" .$conn->error;
}

?>