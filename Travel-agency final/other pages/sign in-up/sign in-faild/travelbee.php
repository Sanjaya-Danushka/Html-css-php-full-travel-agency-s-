<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'travelbee');

$name = $_POST['userid'];
$email = $_POST['email'];
$password = $_POST['password'];

$s = "select * from main where username ='$name'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:sign-in failed.php');
}else{
	$reg = "insert into main(username,email,password) values('$name','$email','$password')";
	mysqli_query($con,$reg);
	header('location:../connect-success(sign-1)/sign -success.php');
}




?>