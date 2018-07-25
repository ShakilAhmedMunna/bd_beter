<?php
//error_reporting(E_ERROR);
session_start();

 $host="localhost";
 $username="root";
 $pass="";
 $db_name="db_betar";
 $conn=mysqli_connect($host, $username, $pass,$db_name) or die("Could not connected into Database");

?>