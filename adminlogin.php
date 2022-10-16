<?php include("loginvalidation.php") ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login</title>
</head>

<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
		<fieldset>
			<legend>Login page</legend>

			<label>Username :</label>
			<input type="text" name="username" value = "<?php echo $username; ?>">
			<br><br>
			<label>Password:</label>
			<input type="text" name="password" value = "<?php echo $password; ?>">
			<br><br>

			<input type="submit" name="submit" value="Login">
			<br><br>
			<br><br>
			<p>Don't have an account?</p>
			<a href="adminRegistration.php">Click here for Sign up!</a>


		</fieldset>


	</form>

</body>
</html>


