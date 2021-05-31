<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$server = '';
$username = '';
$password = '';
$db_name = '';
/* Attempt to connect to MySQL database */
$link = mysqli_connect($serrver,$username,$password,$db_name);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>