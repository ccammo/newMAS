<?php

/**
 * Open a connection via PDO to create a
 * new database and table with structure.
 *
 */

require "config.php";

try 
{
<<<<<<< HEAD
	$connection = new PDO("mysql:host=$162.241.224.44", $root, $root, $options);
	$sql = file_get_contents("init.sql");
	$connection->exec($sql);
=======
	$connection = new PDO("sqlsrv:server = tcp:masserver.database.windows.net,1433; Database = masDB", "yokota", "Sports12!@");
	//$sql = file_get_contents("data/init.sql");
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
>>>>>>> 6f75ed9462092ec30a0e1940292a484baeb4a49e
	
	echo "Database and table users created successfully.";
}

catch(PDOException $error)
{
	echo $sql . "<br>" . $error->getMessage();
}