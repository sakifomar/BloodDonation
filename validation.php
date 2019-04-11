<?php

session_start();

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'blooddonation');

$username = $_POST['user'];
$pass = $_POST['password'];


$s = " select * from usertable where username = '$username' && password = '$pass'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
    $_SESSION['username'] = $username;
    header('location:index.php');
}else{
    echo"Sorry!! User Name And Password Did Not Match!!";
    echo"  Go Back To Our <a href='index.php'>Home Page</a>";
}

?>