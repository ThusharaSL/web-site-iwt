<?php
if(isset($_POST["Name"]) && isset($_POST["Email"]) && isset($_POST["Project"]) && isset($_POST["Description"]))
{
    $name = $_POST["Name"];
    $email = $_POST["Email"];
    $company = $_POST["Company"];
    $project = $_POST["Project"];
    $description = $_POST["Description"];

    require_once 'db-config.php';
    require_once 'functions.inc.php';
    require_once 'admin-functions.inc.php';

    addInquiry($name, $email, $company, $project, $description);
    header('Location:../contact-us.php?message=InquiryAdded');
}
else{
    header('Location:../contact-us.php');
}
