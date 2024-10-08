<?php
require_once 'includes/db-config.php';
require_once 'includes/check-page-permission.inc.php';

$title = "Admin - Gaxios";
include 'components/header.php';
?>

<?php
// fetch all inquiries
$sql = "SELECT * FROM inquiries;";
$presult = $conn->query($sql);

if ($presult->num_rows > 0) {
    // output data of each row
    while($row = $presult->fetch_assoc()) {
        $inquiries[] = $row;
    }
}
?>

<?php
if (isset($_GET["message"])) {
    $message = $_GET["message"];
    if ($message == "StatusChanged") {
        echo "<script type='text/javascript'>showToast('Seen status changed successfully!', 4000, 'success');</script>";
    } else if ($message === "ErrorChangingStatus") {
        echo "<script type='text/javascript'>showToast('Error changing seen status!', 4000, 'error');</script>";
    }
}
?>

<div class="page">
<div class="container admin-body-min-height">
    <div class="section-padding flex justify-between">
        <?php
          include 'components/admin-side-menu.php';
        ?>
        <div style="width: 80%" class="right-wrapper">
            <h3>Inquiries</h3>
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
                    <th>Set View Status</th>
                </tr>
                </thead>
                <tbody>
                <?php
                if (!empty($inquiries)) {
                    foreach ($inquiries as $inquiry) {
                        $currentStatus = $inquiry["Is_Seen"];
                        echo "<tr>";
                        echo "<td>".$inquiry['Inq_ID']."</td>";
                        echo "<td>".$inquiry['Created_At']."</td>";
                        echo "<td>".$inquiry['Name']."</td>";
                        echo "<td>".$inquiry['Email']."</td>";
                        echo "<td>".$inquiry['Company']."</td>";
                        echo "<td>".$inquiry['Project']."</td>";
                        echo "<td>".$inquiry['Description']."</td>";
                        echo "<form method='POST' action='includes/change-seen-status.inc.php'>";
                        echo "<td class='flex justify-center items-center'>";
                        echo "<input type='hidden' name='Inq_ID' value='".$inquiry['Inq_ID']."'>";
                        echo "<select class='custom-dropdown' name='seenStatus'>";
                        echo "<option value='1' ".( $currentStatus == 1 ? 'selected' : '').">Seen</option>";
                        echo "<option value='0' ".( $currentStatus == 0 ? 'selected' : '').">Un Seen</option>";
                        echo "</select>";
                        echo "<button type='submit' class='btn-primary' style='margin-left: 10px'>Change</button>";
                        echo "</form>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='5' style='text-align: center'>No inquiries found!</td></tr>";
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</div>

<?php
include 'components/admin-footer.php';
$conn->close();
?>

