<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'travelbee');

$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$number = $_POST['number'];
$post = $_POST['postel_code'];
$address = $_POST['address'];

$s = "select * from data where email ='$email'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	$reg = "UPDATE data SET fname ='$fname',lname ='$lname',password ='$password',email ='$email',number ='$number',post ='$post',address ='$address'WHERE email = '$email'";
	mysqli_query($con,$reg);
	header('location:../payment/payment-done/payment.html');
	
}else{
	echo "failed";
	
}




?>