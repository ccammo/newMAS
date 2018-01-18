<?php

/**
 * Configuration for database connection
 *
 */
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:masserver.database.windows.net,1433; Database = masDB", "yokota", "Sports12!@");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

<<<<<<< HEAD
$host       = "162.241.224.44";
$username   = "yokotasp_admin";
$password   = "Password1!";
$dbname     = "test"; //will use later
$dsn        = "mysql:host=$162.241.224.44;dbname=$yokotasp_test"; //will use later
=======
/**
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "yokota@masserver", "pwd" => "Sports12!@", "Database" => "masDB", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:masserver.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
**/


$host       = "tcp:masserver.database.windows.net,1433";
$username   = "yokota";
$password   = "Sports12!@";
$dbname     = "masDB"; //will use later
$dsn        = "sqlsrv:server = tcp:masserver.database.windows.net,1433"; //"mysql:host=$host;dbname=$dbname"; //will use later
>>>>>>> 6f75ed9462092ec30a0e1940292a484baeb4a49e
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
              );