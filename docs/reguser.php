<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>User List | RODSA</title>
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
	<a href="complaints.php" class="icon-a"><i class="fa fa-message icons"></i>&nbsp;&nbsp;Complaints</a>
	<a href="maintenance.php" class="icon-a"><i class="fa fa-screwdriver-wrench icons"></i>&nbsp;&nbsp;Maintenance</a>
	<a href="route.php" class="icon-a"><i class="fa fa-route icons"></i>&nbsp;&nbsp;Route</a>
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
								<h4>Registered User List</h4>
							</div>

								<div class="card-body">
		<table class="table	table-bordered table-striped">

				<thead> 
					<tr>
						
						<th class="theading">No.</th>
						<th class="theading">Station Name</th>
						<th class="theading">Disable/Enable</th>
						<th class="theading">Contact</th>

					

						<th class="theading">Edit</th>
						<th class="theading">Delete</th>
				
					</tr>
				</thead>
				<tbody>
					<?php
					include('dbcon.php');
						$users = $auth->listUsers();

				$i=1;		
				foreach ($users as $user) 
				{
					?>
					<tr>
						<td class="theading"><?=$i++?></td>
						<td class="theading"><?=$user->displayName ?></td>
						<td class="theading"><?=$user->phoneNumber ?></td>  
						<td class="theading"><?=$user->email ?></td> 
						 <td>
 							<?php
 								if($user->disabled)
 								{
 									echo"Disabled";
 								} else{

 									echo "Enabled";
 								}

 							?>
						</td>
				
							<td>
								<a href="user-edit.php?id=<?=$user->uid;?>" class="btn btn-primary">Edit</a>
							</td>
							<td>
								<!--<a href="user-del.php" class="btn btn-danger">Delete</a> -->
								<form action " code.php" method="POST">
									
									<button type = "submit" name="reg_user_delete_btn" value=" <?=$user->uid;?>" class="btn btn-danger btn-sm" >Delete</button>

								</form>

							</td>	
					</tr>
    				<?php 

    				}
					?>

					
				</tbody>
			</table>
	</div>

							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
							<div class="card-header">
								<h4>Enable or Disable User Account</h4>
							</div>
							<div class="card-body">
								<form action="code.php" method="POST">
									<?php
									if(isset($GET ['id']))
									{
										$uid = $_GET ['id'];

										try {
    							$user = $auth->getUser($uid);
    							      ?>

									<input type="hidden" name="ena_dis_user_id"> value="<?= GET['id'];?>">
									<div class="input-group mb-3">
										<select name="select_enable_disable" class="form-control" required>
											<option value="">Select</option>
											<option value="disable">Disable</option>
											<option value="enable">Enable</option>
										</select>
  
 					 <button type="submit" name="enable_disable_user_ac" class="input-group-text btn btn-primary" >Submit
 						 </button>
						</div>
						 <?php
							} catch (\Kreait\Firebase\Exception\Auth\UserNotFound $e) {
   						 echo $e->getMessage();
								}

									} else{
										echo "No User ID Found"
									}
									?>

								</form>
							</div>
							</div>
						</div>
					</div>
				</div>
				
			</div>
</div>
 			d


		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="scripts/nav.js" ></script>
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