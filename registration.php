<?php

session_start();
header('location:user.php');
echo"username already taken";

$con = mysqli_connect('localhost','root','');

mysqli_select_db($con, 'blooddonation');

$username = $_POST['user'];
$pass = $_POST['password'];
$fname = $_POST['first'];
$lname= $_POST['last'];
$email = $_POST['Email'];
$blood = $_POST['blood'];
$ldonate = $_POST['donate'];
$mobile = $_POST['mobile'];
$address= $_POST['address'];

$reg= " insert into usertable(FirstName,LastName,Email,username,password,bloodtype,lastdonation,mobile,address) values ('$fname' , '$lname','$email','$username','$pass','$blood ','$ldonate','$mobile','$address')";
if(!mysqli_query($con, $reg))
    {
        echo "Username Already Taken";
    }
    else{
    $_SESSION['username'] = $username;
    header('location:index.php');
    
}

?>