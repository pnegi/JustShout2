<?php
    // Creating variables
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName ="shouts";

    //connect to mySQL
	$con = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

    //testing connection
    if (!$con){
        die("Connection error: " . mysqli_connect_error());
    }
?>
