<?php
require_once 'db-config.php';
require_once 'admin-functions.inc.php';

if (isset($_POST['projectId'])) {
    $projectId = $_POST['projectId'];

    if (deleteProject($projectId)) {
        header("Location: ../projects.php?message=ProjectDeleted");
        exit();
    } else {
        header("Location: ../projects.php?message=ErrorDeletingProject");
        exit();
    }
}
?>
