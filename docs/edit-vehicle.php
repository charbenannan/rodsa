<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Vehicles | RODSA</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<link rel="stylesheet" type="text/css" href="style.css">
 

	
</head>

<body>


	
	

			<?php
			session_start();
				include('dbcon.php');

				if (isset($_GET['id'])) {
					$key_child = $_GET['id'];

					$ref_table = 'vehicles';
					$getdata = $database->getReference($ref_table)->getChild($key_child)->getValue();
				
					
					if ($getdata > 0)
					 {
						?>
						<div class="center">
					<input type="checkbox" id="show"> <h8 style="color:white;">Click here </h8>
				<div class="cover">
			
			<label for="show" class="close-btn fas fa-times"></label>
			<div class="text"> RODSA | Update Vehicle</div>

			<form action="code.php" method="POST">
				<input type="hidden" name="key" value="<?=$key_child;?>">
				<div class="data"> <br>
					<label>Driver's Name</label> 
					<input type="text"  name="driver_name" value="<?=$getdata['dname'];?>">
				</div> 
				<div class="data"> <br>
					<label for=""> Driver's Contact</label>
					<input type="number"  name="driver_contact" value="<?=$getdata['dcontact'];?>">
				</div>
				<div class="data"> <br>
					<label for=""> Registration Number</label>
					<input type="text"  name="reg_num" value="<?=$getdata['reg_num'];?>">
				</div>
				<div class="data"><br>
					<label for="">Vehicle Type/Model</label>
					<input type="text"  name="vmodel" value="<?=$getdata['vmodel'];?>">
				</div>
					<div class="data"><br>
					<label>Availability</label> <br> 	
					<select name="in_station" onchange="callValue();">
					<option value="Yes">Yes</option>
					<option value="Unavailable"> Not available</option>
					<!--<option value="Enroute"> En Route</option> -->
					<option value="Maintenance">Under maintenace</option>
					</select>
				</div>
				
				<div class="btn">
					<div class="inner"></div>
					<button type="submit" name="update_vehicle">Update</button>
				</div>
  
			</form>
			<?php
					}
					else{
						$_SESSION['status'] = "Invalid ID";
						header('Location: vehicles.php');
						exit();
					}
				}
					else
					{
						$_SESSION['status'] = "No record for this vehicle was found";
						header('Location: vehicles.php');
						exit();
					}
				
				
			?>

		</div>

	</div>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="scripts/nav.js" ></script>
		<script type="text/javascript">
				

				$(".nav2").click(function(){
					
					 $(".vehicles-tab").css('height','670px');
					});

		</script>
</body>




