<?php
require_once 'includes/db-config.php';

$title = "Sign Up - Gaxios";
include 'components/header.php';
?>

<div class="page">
<div class="container section-padding flex justify-center items-center">
    <div class="login-container">
        <form action="includes/sign-up.inc.php" method="post" class="login-form">
            <h2 style="font-size: 30px">Sign Up</h2>
            <?php
            if(isset($_GET["error"])){
                if($_GET["error"]=="emptyinput"){
                    echo'<div class = "message error">fill all</div>';
                }elseif($_GET["error"]=="invalidEmail"){
                    echo'<div class = message "error">Invalid Email</div>';

                }elseif($_GET["error"]=="passwordnotmatch"){
                    echo'<div class = "message error">Re enter Pasword Not match </div>';

                }elseif($_GET["error"]=="emailtaken"){
                    echo'<div class = "message error">The Email you entered already exists </div>';

                }elseif($_GET["error"]=="stmtfailed"){
                    echo'<div class = "message error">Sign Up Failed Try Again </div>';

                }elseif($_GET["error"]=="none"){
                    echo'<div class = "message success">account created successfully</div>';
                } elseif($_GET["error"]=="newEmail"){
                    echo'<div class = "message error">We could not found an account with given email. Please sign up</div>';
                }
            }
            ?>
            <div class="form-group">
                <input type="text" id = "fname" name ="fname" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" id = "lname" name ="lname" placeholder="Last Name"><br>
            </div>
            <div class="form-group">
                <input type="email" id ="email" name ="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" id = "pwd" name ="pwd" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" id = "repassword" name ="repassword" placeholder="Re enter password">
            </div>
            <button name="submit" type="submit" class="btn-primary" style="margin-top: 20px">Sign Up</button>
        </form>
    </div>
</div>
</div>

<?php
$conn->close();
include 'components/contact-us-wrapper.php';
include 'components/footer.php';
?>

