<?php
if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $pwd = $_POST["pwd"];
    $repassword = $_POST["repassword"];

    require_once 'db-config.php';
    require_once 'functions.inc.php';

    $emptyInput = emptyInputSignup($fname, $email, $pwd, $repassword);
    $invalidEmail = invalidEmail($email);
    $passwordMatch = passwordMatch($pwd, $repassword);
    $emailExists = emailExists($conn, $email);

    if ($emptyInput !== false) {
        header("Location:../sign-up.php?error=emptyinput");
        exit();
    }
    if ($invalidEmail !== false) {
        header("Location:../sign-up.php?error=invalidEmail");
        exit();
    }
    if ($passwordMatch !== false) {
        header("Location:../sign-up.php?error=passwordnotmatch");
        exit();
    }
    if ($emailExists !== false) {
        header("Location:../sign-up.php?error=emailtaken");
        exit();
    }

    createUser($conn, $fname, $lname, $email,  $pwd);
} else {
    header("Location:../sign-in.php?success=accountCreate");
}