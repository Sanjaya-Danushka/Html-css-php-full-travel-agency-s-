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

$s = "select * from data where email ='$email'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:payment.html');
}else{
	$reg = "insert into data(fname,lname,password,email,number,post) values('$fname','$lname','$password',
	'$email','$number','$post')";
	mysqli_query($con,$reg);
	header('location:../payment-done/payment.html');
	
}




?>