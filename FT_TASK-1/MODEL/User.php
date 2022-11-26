<?php 
function registration($fname , $lname , $gen, $db, $blood, $add, $e, $ph, $qu, $wor, $user, $pass, $rol){
	$hostname = "localhost";
		$username = "root";
		$password = "";
		$dbname = "admin";
		$conn = mysqli_connect($hostname, $username, $password, $dbname);
		
		if($conn){
			$stmt = $conn->prepare("Insert INTO admininfo (firstname , lastname , gender, dob, bg, address, email, phone, qua, work, username, password, role ) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?)");
			$stmt->bind_param("sssssssssssss", $firstname , $lastname , $gender, $dob, $bg, $address, $email, $phone, $qua, $work, $username, $password, $role);

			$firstname = $fname;
			$lastname = $lname;
			$gender = $gen;
			$dob = $db;
			$bg = $blood;
			$address = $add;
			$email = $e;
			$phone = $ph;
			$qua = $qu;
			$work = $wor;
			$username = $user;
			$password = $pass;
			$role = $rol;
			
			$stmt->execute();
			// die($stmt->error);
			return true;
		}
		else{
			return false;
		}
	}
	?>