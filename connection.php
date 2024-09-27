<?php 
$_SERVER = 'localhost';
$username = 'root';
$password = '';
$db = 'Saikat';
$conn = mysqli_connect($_SERVER,$username,$password,$db);
if($conn)
{
    // echo"Connected Successfully";
}
else{
    echo"Not Connected";
}

?>