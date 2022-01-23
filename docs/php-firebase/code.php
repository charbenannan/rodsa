<?php
session_start();
 include('dbcon.php'); 

 if(isset($_POST['save_station']))
{
    $station_name = $_POST ['station_name'];
    $station_head = $_POST ['station_head'];
    $location = $_POST ['location'];
    $email = $_POST ['email'];
    $password = $_POST ['password'];
//$re_password = $_POST ['re_password'];
   

    //Saving the data
    $postData = [
        'sname' => $station_name,
        'shead' => $station_head,
        'location' => $location,
        'email' => $email,
        'password'  =>  $password,
    ];
    $ref_table ="station";
$postRef_result = $database->getReference($ref_table)->push($postData);

    //check the status of the result
    if ($postRef_result){
        $SESSION ['status'] = "Station Added Successfully";
        header('Location:dashboard/login.php');
    }
    else{
        $SESSION ['status'] = "Station Canot Be  Added";
        header('Location:dashboard/signup.php');
    }
}
?>