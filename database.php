<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "samplelogin";

//Himu kng connection
$conn = new mysqli($servername, $username, $password, $database);

//gina check ang connection
if($conn -> connect_error){
    die("Connection Failed" . $conn -> $connect_error);
}

?>