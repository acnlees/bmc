<?php

if(!empty($_GET['carword'])){


	$carword = $_GET['carword'];

$con = mysqli_connect("localhost", "bemycar", "bemycar1", "bemycar");



$result = mysqli_query($con, "SELECT * FROM `vehicles` JOIN `users` ON `vehicles`.`user_id` = `users`.`id` WHERE `carword` = '$carword' ");


	if(mysqli_num_rows($result)> 0) {


		$row = mysqli_fetch_array($result);
		
		$user_id = $row['user_id'];

		$make = $row['make'];
		$model = $row['model'];
		$year = $row['year'];
		$mileage = $row['mileage'];
		$description = $row['description'];
		$price =  $row['price'];
		$mot =  $row['MOT'];
		$tax =  $row['tax'];
		$image_1 =  $row['image_1'];
		$image_2 =  $row['image_2'];
		$image_3 =  $row['image_3'];
		$image_4 =  $row['image_4'];
		$number =  $row['phone_number'];
		$name = $row['name'];
		$postcode = $row['postcode'];
		echo "found";
	}else{
			echo " not found";

}

}




?>