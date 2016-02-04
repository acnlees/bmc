<?php

include 'header.php';


				echo "<br>";

	echo "<a href ='add_vehicle.php'><button type ='button'>Add Vehicle </button> </a>";

				echo "<br>";


$result = mysqli_query($con, "SELECT * FROM `vehicles` JOIN `users` ON `vehicles`.`user_id` = `users`.`id` WHERE `email` = '$email' ");

if(mysqli_num_rows($result)> 0) {
		echo "<ul>";

		while($row = mysqli_fetch_array($result)){
			echo "<li>";
		echo "<img height = '100px'src ='images/".$row['user_id']."/".$row['image_1']."' </img>";

	echo "<a href ='print_carword.php?carword=".$row['carword']."'><button type ='button'>Print Carword </button> </a>";

		foreach ($row as $string) {
			echo $string;

		}

		echo "</li>";
	}
 	echo "</ul>";
}




?>