<?php
require_once 'includes/db-config.php';
require_once 'includes/check-page-permission.inc.php';
require_once 'utils/counters.php';

$title = "Admin - Gaxios";
include 'components/header.php';
?>

<?php
    $usersCount = getAllRegisterUsersCount();
    $projectsCount = getAllProjectsCount();
    $inqCount = getAllInquiriesCount();

// fetch five users
    $sql = "SELECT * FROM Registered_User ORDER BY Created_At LIMIT 5;";
    $presult = $conn->query($sql);

    if ($presult->num_rows > 0) {
        // output data of each row
        while($row = $presult->fetch_assoc()) {
            $users[] = $row;
        }
    }

    // fetch five inquiries order by created date desc
    $sql = "SELECT * FROM inquiries ORDER BY Created_At DESC LIMIT 5;";
    $presult = $conn->query($sql);

    if ($presult->num_rows > 0) {
        // output data of each row
        while($row = $presult->fetch_assoc()) {
            $inquiries[] = $row;
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
?>

<div class="page">
<div class="container admin-body-min-height">
    <div class="section-padding flex justify-between">
        <?php
          include 'components/admin-side-menu.php';
        ?>
        <div style="width:80%" class="right-wrapper">
            <h3>Dashboard</h3>
            <div class="flex justify-center">
                <div class="card items-center text-center">
                    <h4>Users</h4>
                    <h3><?php echo $usersCount; ?></h3>
                </div>
                <div class="card items-center text-center">
                    <h4>Projects</h4>
                    <h3><?php echo $projectsCount; ?></h3>
                </div>
                <div class="card items-center text-center">
                    <h4>Inquiries</h4>
                    <h3><?php echo $inqCount; ?></h3>
                </div>
        </div>
            <div style="margin-top: 20px; margin-bottom: 20px;">
                <div class="flex justify-between items-center">
                <h3>Recent Inquiries</h3>
                <a   onclick=
                     "handleTabSelect('inquiries')" href="inquiries.php" class="show-more-btn">View All <i class="fa
                     fa-external-link"
                                                                           aria-hidden="true"></i></a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Inquiry ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Company</th>
                        <th>Project</th>
                        <th>Description</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (!empty($inquiries)) {
                        foreach ($inquiries as $inquiry) {
                            $currentStatus = $inquiry["Is_Seen"];
                            echo "<tr>";
                            echo "<td>".$inquiry['Created_At']."</td>";
                            echo "<td>".$inquiry['Inq_ID']."</td>";
                            echo "<td>".$inquiry['Name']."</td>";
                            echo "<td>".$inquiry['Email']."</td>";
                            echo "<td>".$inquiry['Company']."</td>";
                            echo "<td>".$services[
                                array_search($inquiry['Project'], array_column($services, 'Service_ID'))
                                ]['Service_Name'
                                ]."</td>";
                            echo "<td>".$inquiry['Description']."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='7' style='text-align: center'>No inquiries found</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>

            <div style="margin-top: 20px; margin-bottom: 20px;">
                <div class="flex justify-between items-center">
                <h3>Recent Users</h3>
                <a  onclick=
                     "handleTabSelect('users')" href="users.php" class="show-more-btn">View All <i class="fa
                     fa-external-link"
                                                                      aria-hidden="true"></i></a>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Joined Date</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                    if (!empty($users)) {
                        foreach ($users as $user) {
                            $currentRole = $user["User_Type"];
                            if ($user['User_ID'] == $_SESSION['uid']) {
                                continue; // Skip the current logged-in user
                            }
                            echo "<tr>";
                            echo "<td>".$user['Created_At']."</td>";
                            echo "<td>".$user['F_Name']."</td>";
                            echo "<td>".$user['L_Name']."</td>";
                            echo "<td>".$user['Email']."</td>";
                            echo "</tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5' style='text-align: center'>No users found</td></tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
    </div>
</div>
</div>

    <script>
        // Save the selected tab in localStorage
        function handleTabSelect(tab) {
            window.localStorage.setItem("selectedTab", tab);
        }
    </script>


    <?php
include 'components/admin-footer.php';
$conn->close();
?>

