<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require 'includes/db-config.php';

// Redirect if user is not Administrator or if session role is not set
if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "Administrator") {
    header('Location: home.php');
    exit();
}
?>