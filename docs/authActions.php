<?php
include ('dbcon.php');


if(isset($_POST['signup'])){
	$email = $_POST['email'];
	$password = $_POST['password'];


	$auth =$firebase->getAuth();
	$user = $auth->createUserWithEmailAndPassword($email, $password);
	header("Location: login.php");
}
else{
	$email = $_POST['email'];
	$password = $_POST['password'];


	$auth =$firebase->getAuth();
	$user = $auth->getUserWithEmailAndPassword($email, $password);
	header("Location: login.php");

	if($user){
		session_start();
		$_SESSION['user'] = true;
		header("Location: index.php");
		
	}
}
?>