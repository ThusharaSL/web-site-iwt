<?php
require_once 'db-config.php';
require_once 'admin-functions.inc.php';

if (isset($_POST['role']) && isset($_POST['userId'])) {
    $selectedRole = $_POST['role'];
    $userId = $_POST['userId'];

    if (changeRole($userId, $selectedRole)) {
        header("Location: ../users.php?message=RoleChanged");
        exit();
    } else {
        header("Location: ../users.php?message=ErrorChangingRole");
        exit();
    }
}
?>