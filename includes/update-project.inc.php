<?php
if(isset($_POST["submit"]))
{
    $projectId = $_POST["projectId"];
    $service_id = $_POST["service"];
    $client_id = $_POST["client"];
    $project_name = $_POST["projectName"];
    $project_description = $_POST["projectDescription"];
    $start_date = $_POST["startDate"];
    $assigned_manager_id = $_POST["assignedManager"];
    $est_complete_date = $_POST["estCompletionDate"];
    $status = $_POST["status"];

    require_once 'db-config.php';
    require_once 'functions.inc.php';
    require_once 'admin-functions.inc.php';

    updateProject($projectId, $project_name, $project_description, $assigned_manager_id, $client_id, $service_id,
        $start_date,
    $status,
        $est_complete_date);
    header('Location:../projects.php?message=ProjectUpdated');
}
else{
    header('Location:../projects.php');
}
