<?php
   require 'includes/db-config.php';

    function getAllRegisterUsersCount()
    {
        global $conn;
        $sql = "SELECT COUNT(*) AS total_users_records FROM Registered_User";
        $result = $conn->query($sql);

    // Check and fetch result
        if ($result->num_rows > 0) {
            // Fetch the count
            $row = $result->fetch_assoc();
            return $row['total_users_records'];
        } else {
            return 0;
        }
    }

    function getAllProjectsCount()
    {
        global $conn;
        $sql = "SELECT COUNT(*) AS total_projects_records FROM Project";
        // Check and fetch result
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the count
            $row = $result->fetch_assoc();
            return $row['total_projects_records'];
        } else {
            return 0;
        }
    }

    function getAllInquiriesCount()
    {
        global $conn;
        $sql = "SELECT COUNT(*) AS total_inq_records FROM inquiries";;
        // Check and fetch result
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Fetch the count
            $row = $result->fetch_assoc();
            return $row['total_inq_records'];
        } else {
            return 0;
        }
    }
?>