<?php
require_once 'db-config.php';
require_once 'admin-functions.inc.php';

if (isset($_POST['userId'])) {
    $userId = $_POST['userId'];

    if (deleteUser($userId)) {
        header("Location: ../users.php?message=UserDeleted");
        exit();
    } else {
        header("Location: ../users.php?message=ErrorDeletingUser");
        exit();
    }
}
?>
