<?php
include('authentication.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vehicles | RODSA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
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
	<!-- <a href="route.php" class="icon-a"><i class="fa fa-route icons"></i>&nbsp;&nbsp;Route</a> -->
</div>
<?php
	
	if(isset($_SESSION ['status']))
	 {
	 	echo "<h8 class ='alert'>".$_SESSION['status']."<h8>";
	 	unset($_SESSION['status']);
	 }
?>
<div id="main" class ="vehicles-tab" >
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


		<div class="clearfix">
			<div class="container" >
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-header">
								<h4>Station Vehicle</h4>
								<label for="show" class="shw-btn">Add Vehicle</label>
							</div>

								<div class="card-body">
		<table class="table	table-bordered table-striped">

				<thead> 
					<tr>
						
						<th class="theading">No.</th>
						<th class="theading">Name</th>
						<th class="theading">Contact</th>
						<th class="theading"> Registration</th>
						<th class="theading">Model</th>
						<th class="theading">At Work</th>
						<th class="theading">Edit</th>
						<th class="theading">Delete</th>
				
					</tr>
				</thead>
				<tbody>
					<?php
					include ('dbcon.php');
					$ref_table = 'vehicles';
					$fetchdata = $database->getReference($ref_table)->getValue();
					 
					 if($fetchdata > 0){

					 	$i = 1;
					 	foreach($fetchdata as $key=> $row){
					 		?>
					 	<tr>

								<td class="theading"> <?=$i++;?></td>
								<td class="theading"> <?=$row['dname'];?></td>
								<td class="theading"> <?=$row['dcontact'];?></td>
								<td class="theading"> <?=$row['vmodel'];?></td>
								<td class="theading"> <?=$row['reg_num'];?></td>
								<td class="theading"> <?=$row['available'];?></td>

								<td>
									

									<a href="edit-vehicle.php?id=<?=$key;?>" class="btn btn-primary">Edit <i class="fa fa-pencil-square" aria-hidden="true"></i></a>
									
									
									<!--
									<label   class="btn btn-primary" for="show=<?=$key;?>" style="margin:0 auto; height:38px; width:75%;"><a href="edit-vehicle.php?id=<?=$key;?>"> Edit <i class="fa fa-pencil-square" aria-hidden="true" ></i></label>
									</a>-->
								</td>
								<td>
									<!--<a href="delete-vehicle.php" class="btn btn-danger">Delete <i class="fa fa-trash" aria-hidden="true"></i></a>-->
									<form action="code.php" method="POST">
										<button type="submit" name="delete_btn" value="<?=$key?>" class=" btn btn-danger" style="margin:0 auto; height:38px; width:90%;">Delete <i class="fa fa-trash" aria-hidden="true"></i></</button>
									</form>
								</td>
					</tr>
					 		<?php

					 	}

					 } else{
					 	?>
					 	<tr>
					 		<td colspan="8">No Record Found</td>
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
					<label>Driver's Name</label>
					<input type="text" required name="driver_name">
				</div>
				<div class="data">
					<label> Driver's Contact</label>
					<input type="number" required name="driver_contact">
				</div>
				<div class="data">
					<label> Registration Number</label>
					<input type="text" required name="reg_num">
				</div>
				<div class="data">
					<label>Vehicle Type/Model</label>
					<input type="text" required name="vmodel">
				</div>
					<div class="data">	
					<label>Availability</label> <br>
					<select name="in_station" id="cars">
					<option value="Yes">Yes</option>
					<option value="No">Unavailable</option>
					<!--<option value="enroute">En Route</option> -->
					<option value="Maintenance">Under Maintenace</option>
					</select>
				</div> 

				<div class="btn">
					<div class="inner">
					<button type="submit" name="add_vehicle" style="color: white;">Add Vehicle</button>
					
				</div>
  
			</form>

		</div>

	</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="scripts/nav.js" ></script>
		<script src="scripts/drpdwn.js" ></script>
		<script type="text/javascript">
				

				$(".nav2").click(function(){
					
					 $(".vehicles-tab").css('height','755px');
					});

	 function menuToggle(){
        const toggleMenu = document.querySelector('.menu');
        toggleMenu.classList.toggle('active');
    }

</script>
</body>
</html>
