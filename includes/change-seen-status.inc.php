<?php
require_once 'db-config.php';
require_once 'admin-functions.inc.php';

if (isset($_POST['seenStatus']) && isset($_POST['Inq_ID'])) {
    $newStatus = $_POST['seenStatus'];
    $inquiryId = $_POST['Inq_ID'];

    if (changeSeenStatus($inquiryId, $newStatus)) {
        header("Location: ../inquiries.php?message=StatusChanged");
        exit();
    } else {
        header("Location: ../inquiries.php?message=ErrorChangingStatus");
        exit();
    }
}
?>