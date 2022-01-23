<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vehicles | RODSA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="..\style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="..\fontawesome-free-5.15.4-web/css/all.css">
</head>
<body>

	
<div id="mySidenav" class="sidenav" style="">
		<p class="logo"><span>RODSA</p>
			<a href="..\index.php" class="icon-a"><i class="fa-solid fa-gauge-simple"></i>&nbsp;&nbsp;Dashboard</a>
	
			
	<a href="vehicles.php" class="icon-a"><i class ="fa fa-car icons"></i>&nbsp;&nbsp;Vehicles</a>
	<a href="complaints.php" class="icon-a"><i class="fa fa-message icons"></i>&nbsp;&nbsp;Complaints</a>
	<a href="roadworthy.php" class="icon-a"><i class="fa fa-screwdriver-wrench icons"></i>&nbsp;&nbsp;Road Worthy</a>
	<a href="route.php" class="icon-a"><i class="fa fa-route icons"></i>&nbsp;&nbsp;Route</a>
</div>

<div id="main" class ="vehicles-tab">
	<div class="head">
		<div class="col-div-6">
			<span style="font-size:30px; cursor:pointer; color:white" class="nav">
				&#9776;Dashboard</span>
				<span style="font-size:30px; cursor:pointer; color:white" class="nav2">
				&#9776;Dashboard</span>
		</div>

		<div class="col-div-6"></div>

<div class="profile">
			<img src="..\images/avatar.jpg" class="pro-img" alt="avatar">
		<p > admin <span>RODSA admin</span></p>
	</div>
</div>

		<div class="clearfix">
			<div class="container" >
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4>Vehicles</h4>
								<label for="show" class="shw-btn">Add Vehicle</label>
							</div>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>

	<div class="center">
		<input type="checkbox" id="show">
		<div class="cover">
			<label for="show" class="close-btn fas fa-times"></label>
			<div class="text"> RODSA | Add Vehicle</div>
			<form action="#">
				<div class="data">
					<label>Driver's Name</label>
					<input type="text" required>
				</div>
				<div class="data">
					<label> Driver's Contact</label>
					<input type="text" required>
				</div>
				<div class="data">
					<label> Registration Number</label>
					<input type="text" required>
				</div>
				<div class="data">
					<label>Vehicle Type/Model</label>
					<input type="text" required>
				</div>
					<div class="data">	
					<label>Availability</label> <br>
					<select name="cars" id="cars">
					<option value="Yes">Yes</option>
					<option value="No">Not available</option>
					<option value="maintenance">Under maintenace</option>
					</select>
				</div>
				<br>
				<div class="btn">
					<div class="inner"></div>
					<button type="submit">Add</button>
				</div>
  
			</form>
		</div>
	</div>

	<div class="clearfix"></div>
			
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="..\scripts/nav.js" ></script>
</body>
</html>