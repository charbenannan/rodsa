<?php
session_start();
 include('dbcon.php'); 


 if(isset($_POST['enable_disable_user_ac']))
 {
    $disable_enable =$_POST['select_enable_disable'];
    $uid = $_POST['ena_dis_user_id'];

    if($disable_enable == "disable")
    {
        $updatedUser = $auth->disableUser($uid);
        $msg = "Account Disabled";
    } else
    {       
            $updatedUser = $auth->enableUser($uid);
            $msg   = "Account Enabled";
    }

if($updatedUser)
{
    $_SESSION ['status'] = $msg;
    header('Location: reguser.php');
    exit();
}
else
{
    $_SESSION['status'] ="Something Went Wrong!";
    header('Location: reguser.php');
    exit();
}
}

 




if(isset($_POST['reg_user_delete_btn']))
{
    $uid = $_POST['reg_user_delete_btn'];

    try{
            $_SESSION['status'] = "User Deleted Successfully";
    header('Location: reguser.php');
    exit();

    } catch (Exception $e){ 
          $_SESSION['status'] = "No ID found";
    header('Location: reguser.php');
    exit();

    }
    $auth ->deleteUser($uid);
}







 if(isset($_POST['save_station']))
 {
    $sname = $_POST['station_name'];
   $shead = $_POST['station_head'];
   $location=     $_POST['location'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];

    $userProperties = [
    'email' => $email,
    'emailVerified' => false,
    'phoneNumber' => '+233'.$phone,
    'password' => $password,
    'displayName' => $sname,
   
    
];
 
$createdUser = $auth->createUser($userProperties); 

if($createdUser)
{
    $_SESSION['status'] = "Station Registered Successfully";
    header('Location: login.php');
    exit();

} else 
{
      $_SESSION['status'] = "Station Could not Be Registered";
    header('Location: signup.php');
    exit();
}
 }

 if (isset($_POST['delete_btn'])) {
     $del_id = $_POST['delete_btn'];

     $ref_table = 'vehicles/'.$del_id;
     $deletequery_result = $database->getReference($ref_table)->remove();

      if ( $deletequery_result){
        $_SESSION['status'] = "Vehicle Deleted Successfully";
        header('Location: vehicles.php');
    }
    else{
        $_SESSION['status'] = "Vehicle Couldn't Be Deleted";
        header('Location: vehicles.php');
    }
 }

 if (isset($_POST['update_vehicle'])) {

    $key = $_POST['key'];
    $driver_name = $_POST ['driver_name'];
    $driver_contact = $_POST ['driver_contact'];
    $reg_num = $_POST ['reg_num'];
    $vmodel = $_POST ['vmodel'];
    $in_station = $_POST ['in_station'];

   

    //Saving the data
    $updateData = [
        'dname' => $driver_name,
        'dcontact' => $driver_contact,
        'vmodel' => $vmodel,
        'reg_num' => $reg_num,
        'available' => $in_station,
    ];
    $ref_table = 'vehicles/'.$key;
    $updatequery_result = $database->getReference($ref_table)->update($updateData);

     if ($updatequery_result){
        $_SESSION['status'] = "Vehicle Updated Successfully";
        header('Location: vehicles.php');
    }
    else{
        $_SESSION['status'] = "Vehicle Couldn't Be  Updated";
        header('Location: vehicles.php');
    }
 }

 if(isset($_POST['add_vehicle']))
{
    $driver_name = $_POST ['driver_name'];
    $driver_contact = $_POST ['driver_contact'];
    $reg_num = $_POST ['reg_num'];
    $vmodel = $_POST ['vmodel'];
    $in_station = $_POST ['in_station'];

   

    //Saving the data
    $postData = [
        'dname' => $driver_name,
        'dcontact' => $driver_contact,
        'vmodel' => $vmodel,
        'reg_num' => $reg_num,
        'available' => $in_station,
    ];
    $ref_table = 'vehicles/'.$sname;
$postRef_result = $database->getReference($ref_table)->push($postData);

    //check the status of the result
    if ($postRef_result){
        $_SESSION['status'] = "Vehicle Added Successfully";
        header('Location: vehicles.php');
    }
    else{
        $_SESSION['status'] = "Vehicle Couldn't Be  Added";
        header('Location: vehicles.php');
    }
}

if(isset($_POST['add_maintenance']))
{
    $owner_name = $_POST ['vowner'];
    $fault = $_POST ['fault'];
    $vnum = $_POST ['vnum'];
    $vehmodel = $_POST ['vehmodel'];
    $ETA =$_POST ['ETA'];
  

   

    //Saving the data
    $postData = [
        'vowner' => $owner_name,
        'fault' => $fault,
        'vehmodel' => $vehmodel,
        'vnum' => $vnum,
        'ETA' => $ETA,
        
    ];
    $ref_table ="maintenance";
$postRef_result = $database->getReference($ref_table)->push($postData);

    //check the status of the result
    if ($postRef_result){
        $_SESSION['status'] = "Vehicle Added Successfully";
        header('Location: maintenance.php');
    }
    else{
        $_SESSION['status'] = "Vehicle Couldn't Be  Added";
        header('Location: maintenance.php');
    }
}

if (isset($_POST['available_btn'])) {
     $del_id = $_POST['available_btn'];

     $ref_table = 'maintenance/'.$del_id;
     $deletequery_result = $database->getReference($ref_table)->remove();

      if ( $deletequery_result){
        $_SESSION['status'] = "Vehicle Available For Work Now";
        header('Location: maintenance.php');
    }
    else{
        $_SESSION['status'] = "Vehicle Couldn't Be Cleared To Work";
        header('Location: maintenance.php');
    }
 }
?>
