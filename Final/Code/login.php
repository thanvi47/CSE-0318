<?php session_start();
$username = $_POST['username'];
$password  = $_POST['password'];

$link = mysqli_connect('localhost', 'root', '', 'home');

$query = mysqli_query($link, "select * from users where username = '$username'");

$data = mysqli_fetch_assoc($query);


if ($data['password'] == md5($password)){
    $_SESSION['isLogged'] = true;
}
else{
   echo "vul";
}


header("location: index.php");