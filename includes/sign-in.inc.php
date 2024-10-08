<?php
if(isset($_POST["submit"]))
{
    $email = $_POST["email"];
    $pwd=$_POST["pwd"];

    require_once 'db-config.php';
    require_once 'functions.inc.php';

    if(emptyInputLogin($email,$pwd)!==false){
        header("Location:../sign-in.php?error=emptyinputs");
        exit();
    }

    LoginUser($conn,$email,$pwd);
}
else{
    header('Location:../sign-in.php');
}
