<?php

/**
 * Configuration for database connection
 *
 */
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:masserver.database.windows.net,1433; Database = masDB", "yokota", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "yokota@masserver", "pwd" => "{your_password_here}", "Database" => "masDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:masserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);



$host       = "tcp:masserver.database.windows.net,1433";
$username   = "yokota";
$password   = "Password1!";
$dbname     = "massserver"; //will use later
$dsn        = '';//"mysql:host=$host;dbname=$dbname"; //will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );