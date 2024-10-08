<?php
require_once 'includes/db-config.php';

$title = "Admin - Gaxios";
include 'components/header.php';
?>

<?php
// Initialize projects array
$projects = [];
$services = [];
$clients = [];
$managers = [];

// Fetch all projects
$sql = "SELECT * FROM Project WHERE Client_ID = '".$_SESSION['uid']."'";
$presult = $conn->query($sql);

if ($presult && $presult->num_rows > 0) {
    // Output data of each row
    while($row = $presult->fetch_assoc()) {
        $projects[] = $row;
    }
}

//fetch all services
$sql = "SELECT * FROM Service";
$sresult = $conn->query($sql);

if ($sresult && $sresult->num_rows > 0) {
    // Output data of each row
    while($row = $sresult->fetch_assoc()) {
        $services[] = $row;
    }
}

//fetch all clients
$sql = "SELECT * FROM Registered_User WHERE User_Type = 'Client'";
$cresult = $conn->query($sql);

if ($cresult && $cresult->num_rows > 0) {
    // Output data of each row
    while($row = $cresult->fetch_assoc()) {
        $clients[] = $row;
    }
}

//fetch all managers
$sql = "SELECT * FROM Registered_User WHERE User_Type = 'Manager'";
$mresult = $conn->query($sql);

if ($mresult && $mresult->num_rows > 0) {
    // Output data of each row
    while($row = $mresult->fetch_assoc()) {
        $managers[] = $row;
    }
}

?>

    <div class="page">
        <div class="container admin-body-min-height">
            <div class="section-padding flex justify-between">
                <?php
                    echo '
              <div style="width: 100%" class="right-wrapper">
                <div class="flex justify-between items-center">
                    <h3>My Projects</h3>
                </div>
                <div style="margin-top: 20px">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Project Description</th>
                            <th>Start Date</th>
                            <th>EST Completion Date</th>
                            <th>Service</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>';

                    if (!empty($projects)) {
                        foreach ($projects as $project) {
                            echo "<tr>";
                            echo "<td>".$project['Project_Name']."</td>";
                            echo "<td>".$project['Project_Description']."</td>";
                            echo "<td>".$project['Start_Date']."</td>";
                            echo "<td>".$project['Estimated_Completion_Date']."</td>";
                            echo "<td>".$services[
                                array_search($project['Service_ID'], array_column($services, 'Service_ID'))
                                ]['Service_Name'
                                ]."</td>";
                            echo "<td>".$project['Status']."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' class='text-center'>No projects available</td></tr>";
                    }

                    echo '
                        </tbody>
                    </table>
                </div>
              </div>';
                ?>
            </div>
        </div>
    </div>

<?php
if(isset($_GET["message"])){
    $message = $_GET["message"];
    if($message =="ProjectAdded"){
        echo "<script type='text/javascript'>showToast('Project added successfully!', 4000, 'success');</script>";
    }
    if($message =="ProjectDeleted"){
        echo "<script type='text/javascript'>showToast('Project deleted successfully!', 4000, 'success');</script>";
    }
    if($message =="ErrorDeletingProject"){
        echo "<script type='text/javascript'>showToast('Error deleting project!', 4000, 'error');</script>";
    }
    if($message =="ProjectUpdated"){
        echo "<script type='text/javascript'>showToast('Project updated!', 4000, 'success');</script>";
    }
}
?>


    <script>
        function handleAddProject() {
            window.location.href = 'projects.php?addProject=true';
        }

        function handleBack() {
            window.location.href = 'projects.php?addProject=false';
        }

        function handleDeleteProject() {
            return window.confirm('Are you sure you want to delete this project?');
        }

        function handleEditProject(projectId) {
            return  window.location.href = 'edit-project.php?projectId=' + projectId;
        }
    </script>

<?php
include 'components/footer.php';
$conn->close();
?>