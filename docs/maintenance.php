<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Maintenance | RODSA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.css">

</head>
<body>

	
<div id="mySidenav" class="sidenav" style="">
		<p class="logo"><span>RODSA</p>
			<a href="index.php" class="icon-a"><i class="fa-solid fa-gauge-simple"></i>&nbsp;&nbsp;Dashboard</a>
	
			
	<a href="vehicles.php" class="icon-a"><i class ="fa fa-car icons"></i>&nbsp;&nbsp;Vehicles</a>
	<a href="maintenance.php" class="icon-a"><i class="fa fa-screwdriver-wrench icons"></i>&nbsp;&nbsp;Maintenance</a>
	<a href="complaints.php" class="icon-a"><i class="fa fa-message icons"></i>&nbsp;&nbsp;Complaints</a>
	<!--<a href="route.php" class="icon-a"><i class="fa fa-route icons"></i>&nbsp;&nbsp;Route</a> -->
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
				<li><img src="images/edit_profile.png"><a href="edit-profile.php"> Edit Profile </a></li>
				<li><img src="images/help.png"><a href="#"> Help </a></li>
				<li><img src="images/contact.png"><a href="#"> Contact </a></li>
				<li><img src="images/logout.png"><a href="logout.php">Logout </a></li><br>
			<?php endif; ?>
			</ul>
		</div>
	</div>
</div>
<div class="clearfix">
			<div class="container" >
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4>Vehicles Under Maintenance</h4>
								<label for="show" class="shw-btn">Add Vehicle</label>
							</div>

								<div class="card-body">
		<table class="table	table-bordered table-striped">

				<thead> 
					<tr>
						
						<th class="theading">No.</th>
						<th class="theading">Name</th>
						<th class="theading"> Vehicle Model</th>
						<th class="theading">Fault</th>
						<th class="theading">ETA</th>
						<th class="theading">Back To Work</th>
				
					</tr>
				</thead>
				<tbody>
					<?php
					include ('dbcon.php');
					$ref_table = 'maintenance';
					$fetchdata = $database->getReference($ref_table)->getValue();
					 
					 if($fetchdata > 0){

					 	$i = 1;
					 	foreach($fetchdata as $key=> $row){
					 		?>
					 	<tr>

								<td class="theading"> <?=$i++;?></td>
								<td class="theading"> <?=$row['vowner'];?></td>
								<td class="theading"> <?=$row['vehmodel'];?></td>
								<td class="theading"> <?=$row['fault'];?></td>
								<td class="theading"> <?=$row['ETA'];?></td>
								

								<td>
									
									<form action="code.php" method="POST">
										<button type="submit" name="available_btn" value="<?=$key?>" class=" btn btn-primary" style="margin:0 auto; height:38px; width:90%;">Available <i class="form-check" aria-hidden="true"></i></</button>
									</form>
									<!--<a href="edit-vehicle.php?id=<?=$key;?>" class="btn btn-primary">Edit <i class="fa fa-pencil-square" aria-hidden="true"></i></a>-->
									
									
									<!--
									<label   class="btn btn-primary" for="show=<?=$key;?>" style="margin:0 auto; height:38px; width:75%;"><a href="edit-vehicle.php?id=<?=$key;?>"> Edit <i class="fa fa-pencil-square" aria-hidden="true" ></i></label>
									</a>-->
								</td>
								
					</tr>
					 		<?php

					 	}

					 } else{
					 	?>
					 	<tr>
					 		<td colspan="8">No Vehicle Under Maintenance</td>
					 	</tr>
					 	<?php

					 }
					?>

					
				</tbody>
			</table>
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
			<form action="code.php" method="POST">
				<div class="data">
					<label>Vehicle Owner</label>
					<input type="text" required name="vowner">
				</div>
				<div class="data">
					<label>Vehicle Type/Model</label>
					<input type="text" required name="vehmodel">
				</div>
				<div class="data">
					<label> Registration Number</label>
					<input type="text" required name="vnum">
				</div>
					<div class="data">	
					<label>Fault</label> <br>
					<input type="text" required name="fault">
					
				</div> 
				<div class="data">	
					<label>Expected Time of Return</label> <br>
					<input type="text" required name="ETA">
					
				</div> 


				<div class="btn">
					<div class="inner">
					<button type="submit" name="add_maintenance" style="color: white;">Add Vehicle</button>
					
				</div>
  
			</form>

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