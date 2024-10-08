<!DOCTYPE html>
<html>
<head>
    <?php
    if (session_status() === PHP_SESSION_NONE) {
        session_start();
    }
    require 'includes/db-config.php';
    ?>
    <title><?php echo $title?></title>

    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="Gaxios - Online Marketing Agency">
    <meta name="author" content="a">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-16x16.png">
    <link rel="manifest" href="../site.webmanifest">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="../js/main.js"></script>
</head>
<body>

<div class="top-nav">
    <div id="toast" class="toast">
        <span id="toast-message">This is a toast notification!</span>
    </div>
    <div class="container flex justify-between items-center">
        <div>
            <a href="home.php">
            <img src="img/gaxios-logo.png" width="180" height="50" alt="logo" />
            </a>
        </div>
        <ul class="items-center">
            <li><a href="home.php">Home</a></li>
            <li><a href="services.php">Services</a></li>
            <li><a href="about-us.php">About Us</a></li>
            <li><a href="contact-us.php">Contact Us</a></li>
            <li>
                <?php
                    if (isset($_SESSION["email"]) && isset($_SESSION["uid"])) {
                        echo '<div class="profile-dropdown">';
                        echo '<button class="dropbtn">
                                <img src="https://avatar.iran.liara.run/username?username='.$_SESSION["fname"].'+'.$_SESSION["lname"].'" width="40" height="40" alt="profile-user" class="profile-img">
                                </button>';
                             echo '<div class="profile-dropdown-content">
                                    <a href="my-projects.php">My Projects</a>';

                        if (isset($_SESSION["role"]) && $_SESSION["role"] == "Administrator") {
                            echo '<a href="admin.php">Admin</a>';
                        }

                        echo '<a href="includes/sign-out.inc.php">
                                   Sign Out
                        </a>';
                    } else {
                        echo '<div>
                                <a href="sign-in.php">
                                <button class="btn-primary">Sign In</button>
                                </a>
                                <a href="sign-up.php">
                                <button class="btn-primary">Sign Up</button>
                                </a>
                              </div>';
                    }
                    ?>
            </li>
        </ul>
    </div>
</div>


<script>
    // Save the selected tab in localStorage
    function handleTabSelect(tab) {
        window.localStorage.setItem("selectedTab", tab);
    }
</script>

