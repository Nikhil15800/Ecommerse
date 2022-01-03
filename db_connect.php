<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "ecommerse";

$conn = mysqli_connect($servername,$username,$password,$database);

if(!$conn){
    die("Not Connected ".mysqli_connect_error());
}
else{
    //echo"Connection successfully";
}


?>