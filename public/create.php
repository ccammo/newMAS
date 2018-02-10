<?php

/**
 * Use an HTML form to create a new entry in the
 * users table.
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


if (isset($_POST['submit']))
{
	
	require "../config.php";
	require "../common.php";

	try 
	{
		$connection = new PDO("sqlsrv:server = tcp:162.241.224.44,1433; Database = yokotasp_test", "yokotasp_admin", "Password1!");
		
		$new_user = array(
			"firstname" => $_POST['firstname'],
			"lastname"  => $_POST['lastname'],
			"email"     => $_POST['email'],
			"age"       => $_POST['age'],
			"location"  => $_POST['location']
		);

		$sql = sprintf(
				"INSERT INTO %s (%s) values (%s)",
				"mbrAcct",
				implode(", ", array_keys($new_user)),
				":" . implode(", :", array_keys($new_user))
		);
		
		$statement = $connection->prepare($sql);
		$statement->execute($new_user);
	}

	catch(PDOException $error) 
	{
		echo $sql . "<br>" . $error->getMessage();
	}
	
}
?>
<?php require "templates/header.php"; ?>

<?php 
if (isset($_POST['submit']) && $statement) 
{ ?>
	<blockquote><?php echo $_POST['firstname']; ?> successfully added.</blockquote>
<?php 
} ?>

<h2>Add a user</h2>

<form method="post">
	<label for="firstname">First Name</label>
	<input type="text" name="firstname" id="firstname">
	<label for="lastname">Last Name</label>
	<input type="text" name="lastname" id="lastname">
	<label for="email">Email Address</label>
	<input type="text" name="email" id="email">
	<label for="age">Age</label>
	<input type="text" name="age" id="age">
	<label for="location">Location</label>
	<input type="text" name="location" id="location">
	<input type="submit" name="submit" value="Submit">
</form>

<a href="index.php">Back to home</a>

<?php require "templates/footer.php"; ?>
