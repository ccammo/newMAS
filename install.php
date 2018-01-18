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
	
	echo "Database and table users created successfully.";
}

catch(PDOException $error)
{
	echo $sql . "<br>" . $error->getMessage();
}