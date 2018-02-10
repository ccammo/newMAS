<?php

/**
 * Configuration for database connection
 *
 */
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:#####; Database = #####", "#####", "#####");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

$host       = "#####";
$username   = "#####";
$password   = "#####";
$dbname     = "#####"; //will use later
$dsn        = "#####"; //will use later


// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "#####", "pwd" => "#####", "Database" => "#####", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:#####";
$conn = sqlsrv_connect($serverName, $connectionInfo);



$host       = "tcp:#####";
$username   = "#####";
$password   = "#####";
$dbname     = "#####"; //will use later
$dsn        = "sqlsrv:server = tcp:#####"; //"mysql:host=$host;dbname=$dbname"; //will use later

$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );
