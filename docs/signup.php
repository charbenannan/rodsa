<?php
session_start();
if (isset($_SESSION['verified_user_id'])) 
{
	 $_SESSION ['status']= "You are already logged in ";
	header('Location: index.php');
	exit();
}

?><!DOCTYPE html>
<html lang = "en">
<head>
	<meta charset="utf-8">
	<title>Sign Up | RODSA</title>
	<link rel="stylesheet" type="text/css" href="log.css">
</head>
<body>
	<div class="rodsa-header">
		<span id="rodsa-logo">RODSA</span>


   <?php
   
	echo "<h1>Road Digital Safety Assurance </h1>";
	echo "<hr>";
	
	?>
</div>
		
	<!--<form method = "POST" action= "code.php" class="form" enctype="multipart/form-data">
		
		<label> Administrator | Signup</label><p>
		<label>Station Name: </label> 
		<input type="text" name="station_name" placeholder="Enter Station Name"/> </p>
		<label>Station Head: </label>
		<input type="text" name="station_head" placeholder="Enter Station Head"/> </p>
		<label>Location: </label>
		<input type="text" name="location" placeholder="Enter Location of Station"/></p> 
		<label>E-mail: </label>
		<input type="email" name="email" placeholder="Enter e-mail"/></p> 
		<label>Phone Number: </label>
		<input type="number" name="phone" placeholder="Station head's phone number"> </p>
		<label>Password: </label>  
		<input type="password" name="password" placeholder=" Enter Password"/></p>
		<label>Re-enter Password: </label>
		<input type="password" name="password" placeholder="Re-enter Password"/></p>
		<input type="submit" name="save_station" value= "Sign Up" class="btn-signup"> </p>
		<button type="submit" name="save_station" class="btn-signup">Sign Up</button> </p>
		Already signed up?<a href="login.php"> Login</a>




	 </form>-->
	 <div class="center">
	<div class="container" style="top:54% ! important">
		<?php
		
	if(isset($_SESSION ['status']))
	 {
	 	echo "<h8 class ='alert alert-success'>".$_SESSION['status']."<h8>";
	 	unset($_SESSION['status']);
	 }
?>
		<div class="text" style="font-size: 30px ! important; font-weight: 400 ! !important; ">Administrator| Signup</div>
		<form method="POST" action="code.php">
			
			<div class="data">
				<label>Station Name: </label>
				<input type="text" name="station_name" placeholder="Enter Station Name" required style="height:60%;">
			</div>
			<div class="data" style="margin-top: -20px;">
				<label >Station Head: </label>
				<input type="text" name="station_head" placeholder="Enter Station Head" required style="height:60% !important;">
			</div>
			<div class="data" style="margin-top: -20px;">
				<label>Location: </label>
				<input type="text" name="location" placeholder="Enter Location of Station" required style="height:60% !important;">
			</div>
			<div class="data" style="margin-top: -20px;">
				<label>E-mail: </label>
				<input type="email" name="email" placeholder="Enter e-mail" required style="height:60% !important;">
			</div>
			<div class="data" style="margin-top: -20px;">
				<label>Phone Number: </label>
				<input type="number" name="phone" placeholder="Station Head's Phone Number" required style="height:60% !important;">
			</div>
			<div class="data" style="margin-top: -20px;">
				<label>Password: </label>
				<input type="password" name="password" placeholder="Enter Password" required style="height:60% !important;">
			</div>
			
			<div class="btn" style="margin-top: -20px;">
				<div class="inner"></div>
				<button type="submit" name="save_station">Sign Up</button>
			</div>
			<div class="signup-link" style="margin-top: -20px;">Already signed up? <a href="login.php">Login</a></div>
		</form>
	</div>
</div>	


</body>
</html>