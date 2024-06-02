<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$database = "e-ticaret";

$conn = mysqli_connect($servername, $username, $password, $database);
$_SESSION["conn"] = $conn;
mysqli_set_charset($conn, "utf8");

