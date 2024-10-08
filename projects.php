<?php
require_once 'includes/db-config.php';
require_once 'includes/check-page-permission.inc.php';

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
    <div class="container admin-body-min-height">
        <div class="section-padding flex justify-between">
            <?php
            include 'components/admin-side-menu.php';
            if (!isset($_GET['addProject']) || $_GET['addProject'] == "false") {
                echo '
              <div style="width: 80%" class="right-wrapper">
                <div class="flex justify-between items-center">
                    <h3>Projects</h3>
                    <div>
                        <button class="btn-success" onclick="handleAddProject()">Add New +</button>
                    </div>
                </div>
                <div style="margin-top: 20px">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Project Name</th>
                            <th>Project Description</th>
                            <th>Client</th>
                            <th>Start Date</th>
                            <th>EST Completion Date</th>
                            <th>Service</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tbody>';

                if (!empty($projects)) {
                    foreach ($projects as $project) {
                        echo "<tr>";
                        echo "<td>".$project['Project_Name']."</td>";
                        echo "<td>".$project['Project_Description']."</td>";
                        echo "<td>".$clients[array_search($project['Client_ID'], array_column($clients, 'Client_ID'))]['F_Name']."
              ".$clients[array_search($project['Client_ID'], array_column($clients, 'Client_ID'))]['L_Name']."</td>";
                        echo "<td>".$project['Start_Date']."</td>";
                        echo "<td>".$project['Estimated_Completion_Date']."</td>";
                        echo "<td>".$services[array_search($project['Service_ID'], array_column($services, 'Service_ID'))]['Service_Name']."</td>";
                        echo "<td>".$project['Status']."</td>";

                        // Edit button outside the form
                        echo "<td class='flex'>";
                        echo "<button title='Edit Project' class='btn-primary' onclick='handleEditProject(".$project['Project_ID'].")'><i class='far fa-edit'></i></button>";

                        // Delete button inside the form
                        echo "<form method='POST' action='includes/delete-project.inc.php' onsubmit='return handleDeleteProject()' style='display:inline-block; margin-left:10px'>";
                        echo "<input type='hidden' name='projectId' value='".$project['Project_ID']."'>";
                        echo "<button title='Delete Project' type='submit' class='btn-danger'><i class='far fa-trash-alt'></i></button>";
                        echo "</form>";
                        echo "</td>";
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
            } else {
                echo '
              <div style="width: 80%" class="right-wrapper">
                <div class="flex justify-between items-center">
                    <h3>Projects</h3>
                    <div>
                        <button class="btn-primary" onclick="handleBack()"><i class="fa fa-chevron-left" aria-hidden="true" style="margin-right: 10px"></i>Back</button>
                    </div>
                </div>
                <div style="margin-top: 20px">
                    <form action="includes/add-project.inc.php" method="POST">
                        <div class="form-control">
                            <div class="form-label"><label for="service">Service</label></div>
                            <div class="form-input">
                                <select id="service" name="service" required>;
                                    <option value="">Select Service</option>';
                                    foreach ($services as $service) {
                                        echo "<option value='".$service['Service_ID']."'>".$service['Service_Name']."</option>";
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
                                        echo "<option value='".$client['User_ID']."'>".$client['F_Name']." ".$client['L_Name']." |  ".$client["Email"]."</option>";
                                    }
                                    echo '
                                </select>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="projectName">Project Name</label></div>
                            <div class="form-input">
                                <input type="text" id="projectName" name="projectName" placeholder="Enter project name" required>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="projectDescription">Project Description</label></div>
                            <div class="form-input">
                                <textarea rows="10" id="projectDescription" name="projectDescription" placeholder="Enter project description" required></textarea>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="startDate">Start Date</label></div>
                            <div class="form-input">
                                <input type="date" id="startDate" name="startDate" required>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="assignedManager">Assigned Manager</label></div>
                            <div class="form-input">
                                  <select id="assignedManager" name="assignedManager" required>;
                                    <option value="">Select Manager</option>';
                                        foreach ($managers as $manager) {
                                            echo "<option value='".$manager['User_ID']."'>".$manager['F_Name']." "
                                                .$manager['L_Name']."</option>";
                                        }
                                        echo '
                                </select>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="estCompletionDate">Estimated Completion Date</label></div>
                            <div class="form-input">
                                <input type="date" id="estCompletionDate" name="estCompletionDate" required>
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="form-label"><label for="status">Status</label></div>
                            <div class="form-input">
                                <select id="status" name="status" required>
                                    <option value="In Progress">In Progress</option>
                                    <option value="Completed">Completed</option>
                                    <option value="On Hold">On Hold</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-control submit-btn items-center justify-center">
                            <button name="submit" type="submit" style="margin-top: 20px" class="btn-success"><i class="fa fa-plus" aria-hidden="true" style="margin-right: 10px"></i>Add Project</button>
                        </div>
                    </form>
                </div>
              </div>';
            }
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
include 'components/admin-footer.php';
$conn->close();
?>