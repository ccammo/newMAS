<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try 
{
	$connection = new PDO("sqlsrv:server = tcp:masserver.database.windows.net,1433; Database = masDB", "yokota", "Sports12!@");
	//$sql = file_get_contents("data/init.sql");
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	
	echo "Database and table users created successfully.";
}

catch(PDOException $error)
{
	echo $sql . "<br>" . $error->getMessage();
}