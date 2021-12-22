<?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $dbname = "testdatabase";

    $connection = new mysqli($host,$username,$password,$dbname);

    if($connection->connect_error){
        die("Connection failed: ".$connection->connect_error);
    }
?>
