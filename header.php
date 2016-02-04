<?php
session_start();
$con = mysqli_connect("localhost", "bemycar", "bemycar1", "bemycar");

if(!empty($_SESSION['email'])){

	$email = $_SESSION['email'];

}else{

if(basename($_SERVER['PHP_SELF']) == 'index.php' || basename($_SERVER['PHP_SELF']) == 'search.php'){

	//its ok
}else{

	header('Location: index.php');

}
}

echo "<a href ='index.php'>  <img class = 'logo' src ='logo.png' ></img> </a>";


echo "<nav class='clearfix'>
				<ul class='clearfix'>";

if(!empty($email)){
	

	echo "
					<li id = 'logout'><a href='logout.php'>LOG OUT </a></li>
					<li id = 'account'><a href='my_account.php'>MY ACCOUNT </a></li>
					<li id = 'contactdrop'><a href='#'>CONTACT US</a></li>
				
				</ul>
					</nav>
					<nav class='clearfix'>
						 <a href='#' id='pull'>Menu</a> 
					</nav>";

}else{
echo "
					<li id = 'signindrop'><a href='#'>SIGN IN</a></li>
					<li id = 'signupdrop'><a href='#'>SIGN UP</a></li>
					<li id = 'contactdrop'><a href='#'>CONTACT US</a></li>
				
				</ul>
					</nav>
					<nav class='clearfix'>
						 <a href='#' id='pull'>Menu</a> 
					</nav>";


}

if(!empty($email)){
					echo "<h1 class ='welcome'> welcome ". $_SESSION['email'] . "</h1>";

}
echo "	<div class='welcome-wrapper'>
					<div class='container-2'>";

echo "
							<div class='toggle'>

<input type ='text' id ='email' name = 'email' placeholder='email'>

<input type ='text' id ='password' name = 'password' placeholder='password'>



<button type ='button' id = 'login'>Log In </button>


							</div>";

echo "

							<div class='toggle2'>
<form action ='signup.php' method='POST'>

    <input type ='text' id ='signup_email'  name = 'email' placeholder='Email'>
    <input type ='text'  id ='signup_name' name = 'signup_name' placeholder='Name'>

    <input type ='text'  id ='signup_password' name = 'password' placeholder='Password'>
    <input type ='text'  id ='signup_password2' name = 'password2' placeholder='Confirm Password'>
    <input type ='text'  id ='number' name = 'number' placeholder='Phone Number'>

<button id = 'signup_button' type ='button' id = 'login'>Sign Up </button>

</form>

</div>";
echo "


					<div class='toggle3'>
<form action = 'sendmail.php' method='POST' id='sendmailform'>

<input type = 'text' id ='email' name = 'email' placeholder ='email'>
<textarea id= 'message' name ='message' placeholder = 'message'></textarea>


<button type = 'button' id = 'sendmail'>SEND</button>

</form>
</div>";

echo "
</div>
</div>";


echo "<head>

<script src='http://code.jquery.com/jquery-1.12.0.min.js'></script>
<script src='header_controls.js'></script>

  <link rel='stylesheet' href='main.css'>
<script src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js'></script>


</head>";



?>