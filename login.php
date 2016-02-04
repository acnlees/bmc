<?php

$con = mysqli_connect("localhost", "bemycar", "bemycar1", "bemycar");



if(!empty($_POST['email']) && !empty($_POST['password'])){


	$email = $_POST['email'];

	$password = $_POST['password'];



$result = mysqli_query($con, "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'");


if(mysqli_num_rows($result)> 0) {


		echo "success";
}else{
		echo "not found";

}
}else{
		echo "please enter parameters";

}

session_start();

$_SESSION['email'] = $email;




?>