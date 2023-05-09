<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'travelbee');

$name = $_POST['userid'];
$password = $_POST['password'];

$s = "select * from main where username ='$name' && password = '$password'";


$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:../../payment/payment/payment.php');
	
}else{
	header('location:../log-1/login-fail .php');

}


?>