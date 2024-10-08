<?php

require_once 'includes/db-config.php';

$title = "Sign In - Gaxios";
include 'components/header.php';
?>

<div class="page">
<div class="container section-padding flex justify-center items-center">
    <div class="login-container">
        <form action="includes/sign-in.inc.php" method="post" class="login-form">
            <h2 style="font-size: 30px">Sign in</h2>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"]=="emptyinput") {
                    echo '<div class = "message error">fill all</div>';
                }elseif($_GET["error"]=="mustlogin"){
                    echo'<div class = "message error">You must login to access that page</div>';
                }elseif($_GET["error"]=="loginfail"){
                    echo'<div class = "message error">You must login to access that page</div>';
                }elseif($_GET["error"]=="wrongpass"){
                    echo'<div class = "message error">Password incorrect</div>';
                }
            } else if (isset($_GET["success"])) {
                if ($_GET["success"] == "accountCreate") {
                    echo '<div class = "message success">Account created successful. Sign in to explore more</div>';
                }
            }
            ?>
            <div class="form-group">
                <input id="email" type="email" name="email" placeholder="Email address" required>
            </div>
            <div class="form-group">
                <input id="password" type="password" name="pwd" placeholder="Password" required>
            </div>
            <button name="submit" type="submit" class="btn-primary" style="margin-top: 20px">Sign In</button>
        </form>
    </div>
</div>
</div>

<?php
$conn->close();
include 'components/contact-us-wrapper.php';
include 'components/footer.php';
?>

