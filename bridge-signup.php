<?php 

$password = $_POST["password"];

// echo $password;

$hased_password = password_hash($password, PASSWORD_DEFAULT);
echo $hased_password;

$password = "something new";

if( password_verify($password, $hased_password) ){
    echo "you are logged in";
}else {
    echo "Wrong password";
}