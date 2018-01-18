<?php

/**
 * Configuration for database connection
 *
 */
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:162.241.224.44,1433; Database = yokotasp_test", "yokotasp_admin", "Password1!");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

$host       = "162.241.224.44";
$username   = "yokotasp_admin";
$password   = "Password1!";
$dbname     = "yokotasp_test"; //will use later
$dsn        = "mysql:host=$162.241.224.44;dbname=$yokotasp_test"; //will use later


// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "yokota@masserver", "pwd" => "Password1!", "Database" => "yokotasp_test", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:162.241.224.44,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);



$host       = "tcp:162.241.224.44,1433";
$username   = "yokotasp_admin";
$password   = "Password1!";
$dbname     = "yokotasp_test"; //will use later
$dsn        = "sqlsrv:server = tcp:162.241.224.44,1433"; //"mysql:host=$host;dbname=$dbname"; //will use later

$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );