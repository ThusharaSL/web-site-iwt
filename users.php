<?php
require_once 'includes/db-config.php';
require_once 'includes/check-page-permission.inc.php';

$title = "Admin - Gaxios";
include 'components/header.php';
?>

<?php
// fetch all users
$sql = "SELECT * FROM Registered_User;";
$presult = $conn->query($sql);

if ($presult->num_rows > 0) {
    // output data of each row
    while($row = $presult->fetch_assoc()) {
        $users[] = $row;
    }
}
?>

<?php
if (isset($_GET["message"])) {
    $message = $_GET["message"];
    if ($message == "UserDeleted") {
        echo "<script type='text/javascript'>showToast('User deleted successfully!', 4000, 'success');</script>";
    } else if ($message === "ErrorDeletingUser") {
        echo "<script type='text/javascript'>showToast('Error deleting user!', 4000, 'error');</script>";
    } else if ($message == "RoleChanged") {
        echo "<script type='text/javascript'>showToast('Role changed successfully!', 4000, 'success');</script>";
    } else if ($message == "ErrorChangingRole") {
        echo "<script type='text/javascript'>showToast('Error changing role!', 4000, 'error');</script>";
    }
}
?>

    <div class="page">
    <div class="container admin-body-min-height">
        <div class="section-padding flex justify-between">
            <?php
            include 'components/admin-side-menu.php';
            include 'includes/admin-functions.inc.php';
            ?>
            <div style="width: 80%" class="right-wrapper">
                <h3>Users</h3>
                <table class="table">
                    <thead>
                    <tr>
                        <th>Joined Date</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Actions</th>
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
                            echo "<td>".$user['User_Type']."</td>";
                            echo "<td class='flex'>";
                            echo "<form method='POST' action='includes/change-role.inc.php' onsubmit='return confirmRoleChange()'>";
                            echo "<input type='hidden' name='userId' value='".$user['User_ID']."'>";
                            echo "<select class='custom-dropdown' name='role'>";
                            echo "<option value='Administrator' ".($currentRole == 'Administrator' ? 'selected' : '').">Administrator</option>";
                            echo "<option value='Client' ".($currentRole == 'Client' ? 'selected' : '').">Client</option>";
                            echo "<option value='Developer' ".($currentRole == 'Developer' ? 'selected' : '').">Developer</option>";
                            echo "<option value='Designer' ".($currentRole == 'Designer' ? 'selected' : '').">Designer</option>";
                            echo "<option value='Manager' ".($currentRole == 'Manager' ? 'selected' : '').">Manager</option>";
                            echo "</select>";
                            echo "<button class='btn-primary action_btn' type='submit'>Change Role</button>";
                            echo "</form>";
                            echo "<form method='POST' action='includes/delete-user.inc.php' onsubmit='return confirmDeletion()'>";
                            echo "<input type='hidden' name='userId' value='".$user['User_ID']."'>";
                            echo "<button class='btn-danger action_btn' type='submit'>Delete User</button>";
                            echo "</form>";
                            echo "</td>";
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
        function confirmDeletion() {
            return window.confirm('Are you sure you want to delete this user?');
        }
        function confirmRoleChange() {
            return window.confirm('Are you sure you want to change the role of this user?');
        }
    </script>

<?php
$conn->close();
include 'components/admin-footer.php'
?>