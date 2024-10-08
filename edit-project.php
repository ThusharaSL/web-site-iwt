<?php
require_once 'includes/db-config.php';

$title = "Admin - Gaxios";
include 'components/header.php';
?>

<?php
//check project id is set
if(isset($_GET["projectId"])){
    $projectId = $_GET["projectId"];
    $sql = "SELECT * FROM Project WHERE Project_ID = $projectId";
    $result = $conn->query($sql);
    if ($result && $result->num_rows > 0) {
        $project = $result->fetch_assoc();
    }
} else {
    header("Location: projects.php");
    exit();
}

$services = [];
$clients = [];
$managers = [];

// Fetch all projects
$sql = "SELECT * FROM Project";
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
    <div class="container">
        <div class="section-padding flex justify-between">
            <?php
            include 'components/admin-side-menu.php';
                echo '
              <div style="width: 80%" class="right-wrapper">
                <div class="flex justify-between items-center">
                    <h3>Projects</h3>
                    <div>
                        <button class="btn-primary" onclick="handleBack()">Back</button>
                    </div>
                </div>
                <div style="margin-top: 20px">
                    <form action="includes/update-project.inc.php" method="POST">
                        <input type="hidden" name="projectId" value="'.$project['Project_ID'].'">
                        <div class="form-control">
                            <div class="form-label"><label for="service">Service</label></div>
                            <div class="form-input">
                                <select id="service" name="service" required>;
                                    <option value="">Select Service</option>';
                                    foreach ($services as $service) {
                                        echo "<option ".($service['Service_ID'] == $project['Service_ID'] ? 'selected' :
                                                '')." value='".$service['Service_ID']."'>".$service['Service_Name']."</option>";
                                    }
                                echo '
                                </select>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="client">Client</label></div>
                            <div class="form-input">
                                 <select id="client" name="client" required>;
                                    <option value="">Select Client</option>';
                                    foreach ($clients as $client) {
                                        echo "<option ".($client['User_ID'] == $project['Client_ID'] ? 'selected' :
                                                '')." value='".$client['User_ID']."'>".$client['F_Name']." "
                                            .$client['L_Name']." |  ".$client["Email"]."</option>";
                                    }
                                    echo '
                                </select>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="projectName">Project Name</label></div>
                            <div class="form-input">';
                                echo "<input type='text' id='projectName' name='projectName' placeholder='Enter project name' required 
                                        value='".$project['Project_Name']."'
                                    >";
                                echo '
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="projectDescription">Project Description</label></div>
                            <div class="form-input">';
                             echo "<textarea rows='10' id='projectDescription' name='projectDescription' placeholder='Enter project description' required>".$project['Project_Description']."</textarea>";
                                echo '
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="startDate">Start Date</label></div>
                            <div class="form-input">';
                                   echo "<input type='date' id='startDate' name='startDate' required 
                                            value='".$project['Start_Date']."'
                                        >";
                                   echo '
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="assignedManager">Assigned Manager</label></div>
                            <div class="form-input">
                                  <select id="assignedManager" name="assignedManager" required>;
                                    <option value="">Select Manager</option>';
                                        foreach ($managers as $manager) {
                                            echo "<option ".($project['Assigned_Manager_ID'] == $manager['User_ID'] ?
                                                    'selected' :
                                                    '')." value='".$manager['User_ID']."'>".$manager['F_Name']." "
                                                .$manager['L_Name']."</option>";
                                        }
                                        echo '
                                </select>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="estCompletionDate">Estimated Completion Date</label></div>
                            <div class="form-input">';
                                   echo "<input type='date' id='estCompletionDate' name='estCompletionDate' required 
                                            value='".$project['Estimated_Completion_Date']."'
                                        >";
                                   echo '
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="status">Status</label></div>
                            <div class="form-input">
                                <select id="status" name="status" required>';
                                    echo "<option ".($project['Status'] == 'In Progress' ? 'selected' : '')." value='In Progress'>In Progress</option>";
                                    echo "<option ".($project['Status'] == 'Completed' ? 'selected' : '')." value='Completed'>Completed</option>";
                                    echo "<option ".($project['Status'] == 'On Hold' ? 'selected' : '')." value='On Hold'>On Hold</option>";
                                    echo '
                                </select>
                            </div>
                        </div>
                        <div class="form-control submit-btn">
                            <button name="submit" type="submit" class="btn-primary">Update</button>
                        </div>
                    </form>
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
$conn->close();
include 'components/admin-footer.php';
?>