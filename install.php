<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try 
{

	$connection = new PDO("mysql:host=$162.241.224.44", $root, $root, $options);
	$sql = file_get_contents("init.sql");
	$connection->exec($sql);

	$connection = new PDO("sqlsrv:server = tcp:162.241.224.44,1433; Database = yokotasp_test", "yokotasp_admin", "Password1!");
	//$sql = file_get_contents("data/init.sql");
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
	echo "Database and table users created successfully.";
}

catch(PDOException $error)
{
	echo $sql . "<br>" . $error->getMessage();
}