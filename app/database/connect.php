<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "wordsfinddb";

$conn = new mysqli($host, $user, $password, $dbname  );

if($conn->connect_error)
{
    die('Database connection error:' . $conn->connect_error);
};
