<?php
$firstname = $lastname = $gender =  $address = $uname = $pass = "";

		if ($_SERVER['REQUEST_METHOD'] === "POST"){

			function test_input($data){
				$data = trim($data);
				$data = stripcslashes($data);
				$data = htmlspecialchars($data);
				return $data;
			}

			$firstname = test_input($_POST['fname']);
			$lastname = test_input($_POST['lname']);
			$gender = isset($_POST['gender']) ? test_input($_POST['gender']) : NULL;
			$address = test_input($_POST['address']);
			$uname = test_input($_POST['uname']);
			$pass = test_input($_POST['pass']);
	
			$message = "";
			if(empty($firstname)) {

				$message .= "First Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$firstname)) {
					$message .= " Frist name Only letters and spaces";
					$message .= "<br>";
				}
			}
			if (empty($lastname)) {
				$message .= "Last Name is Empty";
				$message .= "<br>";
			}
			else{
				if (!preg_match("/^[a-zA-Z-' ]*$/",$lastname)) {
					$message .= "Last name Only letters and spaces";
					$message .= "<br>";
				}
			}
			if (empty($gender)) {
				$message .= "Gender not Selected";
				$message .= "<br>";
			}
			
			if (empty($address)) {
				$message .= "Street/House/Road is Empty";
				$message .= "<br>";
			}
			if(empty($uname)){
				$message .= "Username can't be Empty";
				$message .= "<br>";
			}

			if(empty($pass)){
				$message .= "Password can't be Empty";
				$message .= "<br>";
			}

			if ($message === ""){
				echo "Registration Successful";

                
			}
			else {
            
				echo $message;
				echo "<br>";
			}
		}
?>
