<?php 

$username = "";
$password = "";

if($_SERVER['REQUEST_METHOD'] === "POST"){

    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);

    $message = "";
    if(empty($username)){
            $message .= "Username can't be Empty";
            $message .= "<br>";
        }

    if(empty($password)){
            $message .= "Password can't be Empty";
            $message .= "<br>";
    }

    if ($message === ""){
        echo "Login Successful.";
        echo"<br>";
        echo"<br>";
        /*
        echo "Username is  : $username";
        echo"<br>";
        echo "Password is  : $password";
        echo"<br>";
        echo"<br>";
        echo"<br>";
        */
    }
    else{
        echo "$message";
        //echo "Please fillup username and password.";
    }
}




?>








