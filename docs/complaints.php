<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Complaints | RODSA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>

	
<div id="mySidenav" class="sidenav" style="">
		<p class="logo"><span>RODSA</p>
			<a href="index.php" class="icon-a"><i class="fa-solid fa-gauge-simple"></i>&nbsp;&nbsp;Dashboard</a>
	
			
	<a href="vehicles.php" class="icon-a"><i class ="fa fa-car icons"></i>&nbsp;&nbsp;Vehicles</a>
	<a href="maintenance.php" class="icon-a"><i class="fa fa-screwdriver-wrench icons"></i>&nbsp;&nbsp;Maintenance</a>
	<a href="complaints.php" class="icon-a"><i class="fa fa-message icons"></i>&nbsp;&nbsp;Complaints</a>
	
	<!--<a href="route.php" class="icon-a"><i class="fa fa-route icons"></i>&nbsp;&nbsp;Route</a>-->
</div>

<div id="main">
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
				<?php if(!isset($_SESSION['verified_user_id'])): ?>
				<!--<li><img src="images/edit_profile.png"><a href="edit-profile.php"> Edit Profile </a></li>
				<li><img src="images/help.png"><a href="#"> Help </a></li>
				<li><img src="images/contact.png"><a href="#"> Contact </a></li>-->
				<li><img src="images/logout.png"><a href="logout.php">Logout </a></li><br>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</div>

		<div class="clearfix"></div>
	</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="scripts/nav.js" ></script>
		<script type="text/javascript">
			function menuToggle(){
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active');
    }
		</script>
</body>
</html>
