
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Edit Profile| RODSA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="log.css">

	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>

	
<div id="mySidenav" class="sidenav" style="">
		<p class="logo"><span>RODSA</p>
			<a href="index.php" class="icon-a"><i class="fa-solid fa-gauge-simple"></i>&nbsp;&nbsp;Dashboard</a>
	
			
	<a href="vehicles.php" class="icon-a"><i class ="fa fa-car icons"></i>&nbsp;&nbsp;Vehicles</a>
	<a href="complaints.php" class="icon-a"><i class="fa fa-message icons"></i>&nbsp;&nbsp;Complaints</a>
	<a href="maintenance.php" class="icon-a"><i class="fa fa-screwdriver-wrench icons"></i>&nbsp;&nbsp;Maintenance</a>
	<a href="route.php" class="icon-a"><i class="fa fa-route icons"></i>&nbsp;&nbsp;Route</a>
</div>

<div id="main" class="ep-tab">
	<div class="head">
		<div class="col-div-6">
			<span style="font-size:30px; cursor:pointer; color:white" class="nav">
				&#9776;Dashboard</span>
				<span style="font-size:30px; cursor:pointer; color:white" class="nav2">
				&#9776;Dashboard</span>
		</div>

		<div class="col-div-6"></div>

<div class="profile">
			<img src="images/avatar.jpg" class="pro-img" alt="avatar" onclick="menuToggle()">
		<p > admin <span>RODSA admin</span></p>
		<div class="menu">
			<h3 >RODSA <span><br>Administrator </span></h3>
			<ul>
				<?php
				include('dbcon.php');
				?>
				<?php if(!isset($_SESSION['verified_user_id'])): ?>
				<li><img src="images/edit_profile.png"><a href="edit-profile.php"> Edit Profile </a></li>
				<li><img src="images/help.png"><a href="#"> Help </a></li>
				<li><img src="images/contact.png"><a href="#"> Contact </a></li>
				<li><img src="images/logout.png"><a href="logout.php">Logout </a></li><br>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</div>
			<!--	<div class="middle">
					<div class="store">
					<div class="word">Edit Profile| RODSA</div>
					<form action="#">
	<div class="info"> 
		<label>Station Name: </label> 
		<input type="text" name="station_name" placeholder="Enter Station Name"/> 
	</div>
	<div class="info">
		<label>Station Head: </label>
		<input type="text" name="station_head" placeholder="Enter Station Head"/> 
	</div>
	<div class="info">	
		<label>Location: </label>
		<input type="text" name="location" placeholder="Enter Location of Station"/>
	</div>
	 <div class="info">	
		<label>E-mail: </label>
		<input type="email" name="email" placeholder="Enter e-mail"/>
	</div>
		<div class="info">
		<label>Phone Number: </label>
		<input type="number" name="phone" placeholder="Station head's phone number"> 
	</div>
		<div class="bton">
			<div class="inside"></div>
			<button type="submit">Edit Profile</button>
		</div>
		<label> Change Password: </label>  
		<input type="password" name="password" placeholder=" Enter New Password"/>
		<label>Re-enter Password: </label>  
		<input type="password" name="password" placeholder=" Re-Enter New Password"/>
	</form>
	</div>
	</div>	-->
	<div class="center">
	<div class="container" style="top:57% ! important">
		<div class="text" style="font-size: 30px ! important; font-weight: 400 ! !important; ">Edit Profile</div>
		<form method="POST" action="code.php">
			<div class="data">
				<label>Station Name: </label>
				<input type="text" name="station_name" placeholder="Enter Station Name" required style="height:60%;" ">
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
				<button type="submit" name="save_station">Update</button>
			</div>
			
		</form>
	</div>
</div>	
					

		<div class="clearfix"></div>
	

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="scripts/nav.js" ></script>
		<script type="text/javascript">
			$(".nav2").click(function(){
					
					 $(".middle").css('height','755px');
					});
			function menuToggle(){
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active');
    }
		</script>
</body>
</html>