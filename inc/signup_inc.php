<?php

if(isset($_POST["submit"])){
    $user_id =$_POST["username"];
    $password=$_POST["password"];
    $password_repeat=$_POST["password_repeat"];
    $email=$_POST["email"];
    include "../classes/dbh_classes.php";
    include "../classes/signup_classes.php";
    include "../classes/signup_control_classes.php";
    $signup = new signup_contr($user_id, $password, $password_repeat, $email);
    $signup->signup_user();
    header("location: ../index.php?error=none");
    
}
?>