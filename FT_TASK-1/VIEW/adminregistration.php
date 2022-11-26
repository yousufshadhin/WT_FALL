<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Registration</title>
</head>
<body>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>

<fieldset>
    <legend>Registration Form</legend>

    <label>Frist Name:</label>
    <input type="text" name="fname" required value = "<?php echo $firstname; ?>">

    <br><br>

    <label>Last Name:</label>
    <input type="text" name="lname" required value = "<?php echo $lastname; ?>">

    <br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Female">
    <label>Female</label>
    <input type="radio" name="gender" value="Male">
    <label>Male</label>

    <br><br>

    <label>Date of Birth:</label>
    <input type="Date" name="dob" required value = "<?php echo $dob; ?>">

    <br><br>

    <label>Blood Group:</label>
    <select name="bg" required value = "<?php echo $bg; ?>">
        <option>A ve(+)</option>
        <option>A ve(-)</option>
        <option>B ve(+)</option>
        <option>B ve(-)</option>
        <option>O ve(+)</option>
        <option>O ve(-)</option>
        <option>AB ve(+)</option>
        <option>AB ve(-)</option>
    </select>

    <br><br>

    <label>Address:</label>
    <input type="text" name="address" required value = "<?php echo $address; ?>">
    
    <br><br>

    <label>Email:</label>
    <input type="text" name="email" required value = "<?php echo $email; ?>">

    <br><br>

    <label>Phone Number</label>
    <input type="Number" name="phone" required value = "<?php echo $phone; ?>">

    <br><br>

    <label>Qualification:</label>
    <input type="text" name="qua" required value = "<?php echo $qua; ?>">

    <br><br>

    <label>Work Experience</label>
    <input type="text" name="work" required value = "<?php echo $work; ?>">

    <br><br>

    <label>Username</label>
    <input type="text" name="uname" required value = "<?php echo $uname; ?>">
    <br><br>

    <label>Password</label>
    <input type="text" name="pass" required value = "<?php echo $pass; ?>">
    <br><br>

    <label>Role</label>
    <select name="role" required value = "<?php echo $role; ?>">
        <option>Admin</option>
        <option>Doctor</option>
        <option>Patient</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Registration">


    <br><br>
    <br><br>

    <p>Already have an account?</p>
    <a href="adminlogin.php">Click here for Log in!</a>

</fieldset>

</form>


</body>
</html>