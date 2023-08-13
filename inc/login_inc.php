<?php

if(isset($_POST["submit"])){
    $user_id =$_POST["username"];
    $password=$_POST["password"];
    include "../classes/dbh_classes.php";
    include "../classes/login_classes.php";
    include "../classes/login_control_classes.php";
    $login = new login_contr($user_id, $password);
    $login->login_user();
    header("location: ../index.php?error=none");
}
?>