<?php

session_start();
header('location:profile.php');


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'blooddonation');
$username=$_SESSION['username'];
$pass=$_POST['password']; 
$firstName=$_POST['first'];
$lastName=$_POST['lastname'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$bloodGroup=$_POST['bloodtype'];
$lastDonation=$_POST['donate'];
$email=$_POST['email'];

$s = "UPDATE blooddonation.usertable SET FirstName = '$firstName', LastName = '$lastName', Address = '$address', password = '$pass', lastdonation= '$lastDonation',Email = '$email',mobile = '$mobile',bloodtype = '$bloodGroup' WHERE usertable.username = '$username';";

$result = mysqli_query($con, $s);

?>