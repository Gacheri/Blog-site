
<?php

$dsn = 'mysql:host=localhost';
$username= 'root';
$password='roots1';
$options=[];
$conn=new PDO($dsn,$username,$password,$options);
// if($conn=new PDO($dsn,$username,$password,$options)){
//     echo"Your database connectionphp was successfull my Lord.";
// }
?>