<?php
// Connnects to the database
$connection = mysql_connect("INSERT_HOST_NAME","INSERT_DATABASE_USER_NAME","INSERT_DATABASE_PASSWORD");
if (!$connection) {
	echo "Looks like something didn't go right. Please contact the webmaster.";
}

// Selects the database
$db_select = mysql_select_db("INSERT_DATABASE_NAME",$connection);
if (!db_select) {
	echo "Looks like something didn't go right. Please contact the webmaster.";
}
?>
<html>
<head>
</head>
<body>
<?php
//Establish variables
$comp = sha1(rand()); // randomly generated string this is the salt for the password. Adds an extra level of protection to avoid hash collision
$userinputpassword = $_POST["n_password"]; // the password the user provided
$username = $_POST["n_username"]; // the username
$password = sha1($userinputpassword . $comp); // a variable that is a combination of the password the user provided and the salt, then hashed with SHA1
$emailaddress = $_POST["n_emailaddress"]; // email address

mysql_select_db("INSERT_DATABASE_NAME", $connection); // In table "UserInfo" add values in fields username, password, emailaddress, and comp
$sql = "
INSERT INTO UserInfo 
(Username, Password, Email, Userc)
VALUES ('$username', '$password', '$emailaddress', '$comp')
";
if (!sql) {
	echo "Looks like something didn't go right. Please contact the webmaster.";
}

// executes the query
mysql_query($sql,$connection);
?>

<?php
echo "Your registration is complete. Thank you!"; // message that appears to let the user knows the process is complete
?>

</body>
</html>
<?php
// closes the connection
mysql_close($connection);
?>