<?php
function deleteUser($userId) {
    global $conn;
    $sql = "DELETE FROM Registered_User WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function deleteProject($projectId) {
    global $conn;
    $sql = "DELETE FROM Project WHERE Project_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $projectId);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function changeRole($userId, $newRole)
{
    global $conn;
    $sql = "UPDATE Registered_User SET User_Type = ? WHERE User_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("si", $newRole, $userId);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function addProject($projectName, $projectDescription, $projectManager, $Client,
                    $Service, $StartDate, $Status, $EstCompletionDate)
{
    global $conn;

    $sql = "INSERT INTO Project (Project_Name, Project_Description, Assigned_Manager_ID, Client_ID, Service_ID, Start_Date, Status, Estimated_Completion_Date) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiiisss", $projectName, $projectDescription, $projectManager, $Client, $Service, $StartDate, $Status, $EstCompletionDate);

    if ($stmt->execute()) {
        return true;
    } else {
        // Print detailed error message
        echo "SQL Error: " . $stmt->error;
        return false;
    }
}

function updateProject($projectId, $projectName, $projectDescription, $projectManager, $Client,
                    $Service, $StartDate, $Status, $EstCompletionDate)
{
    global $conn;
    $sql = "UPDATE Project SET Project_Name = ?, Project_Description = ?, Assigned_Manager_ID = ?, Client_ID = ?, Service_ID = ?, Start_Date = ?, Status = ?, Estimated_Completion_Date = ? WHERE Project_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssiiisssi", $projectName, $projectDescription, $projectManager, $Client, $Service, $StartDate,
        $Status, $EstCompletionDate, $projectId);

    if ($stmt->execute()) {
        return true;
    } else {
        // Print detailed error message
        echo "SQL Error: " . $stmt->error;
        return false;
    }
}

function changeSeenStatus($inquiryId, $newStatus){
    global $conn;
    $sql = "UPDATE inquiries SET Is_Seen = ? WHERE Inq_ID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $newStatus, $inquiryId);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function addInquiry($name, $email, $company, $project, $description){
    global $conn;
    $sql = "INSERT INTO inquiries (Name, Email, Company, Project, Description) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssss", $name, $email, $company, $project, $description);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}
?>