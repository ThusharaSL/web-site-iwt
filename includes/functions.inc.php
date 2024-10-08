<?php
function emptyInputSignup($fname, $email, $pwd, $repassword)
{
    if (empty($fname) || empty($email) || empty($pwd) || empty($repassword)) {
        return true;
    } else {
        return false;
    }
}

function invalidUid($username)
{
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
        return true;
    } else {
        return false;
    }
}

function invalidEmail($email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

function passwordMatch($pwd, $repassword)
{
    if ($pwd !== $repassword) {
        return true;
    } else {
        return false;
    }
}

function emailExists($conn, $email)
{
    $sql = "SELECT * FROM Registered_User WHERE email = ?;";
    $stmt = $conn->prepare($sql);
    if (!$stmt) {
        header("Location:../sign-up.php?error=stmtfailed");
        exit();
    }
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $resultData = $stmt->get_result();

    if ($row = $resultData->fetch_assoc()) {
        return $row;
    } else {
        return false;
    }
    $stmt->close();
}

function createUser($conn, $fname, $lname, $email, $pwd)
{
//    check if email is exist
    if (emailExists($conn, $email) !== false) {
        header("Location:../sign-up.php?error=emailtaken");
        exit();
    }

    // Define the SQL query with placeholders for prepared statement
    $sql = "INSERT INTO Registered_User(F_Name, L_Name, Email, Password, User_Type) VALUES (?, ?, ?, ?, ?);";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        header("Location:../sign-up.php?error=stmtfailed");
        exit();
    }

    // Hash the password
    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    $userType = "Client";  // Fixed value for user type

    // Bind the parameters ("sssss" indicates all five parameters are strings)
    $stmt->bind_param('sssss', $fname, $lname, $email, $hashedPwd, $userType);

    // Execute the statement
    $stmt->execute();

    // Close the statement
    $stmt->close();

    // Redirect the user on success
    header("Location:../sign-in.php?success=accountCreate");
    exit();
}

function emptyInputLogin($email, $pwd)
{
    if (empty($email) || empty($pwd)) {
        return true;
    } else {
        return false;
    }
}

function loginUser($conn, $email, $pwd)
{
    $emailExists = emailExists($conn, $email);
    if ($emailExists === false) {
        header("location:../sign-up.php?error=newEmail");
        exit();
    }
    $pwdHashed = $emailExists['Password'];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if ($checkPwd === false) {
        header("Location:../sign-in.php?error=wrongpass");
        exit();
    } else if ($checkPwd === true) {
        session_start();
        echo "Logged in";
        $_SESSION["email"] = $emailExists["Email"];
        $_SESSION["uid"] = $emailExists["User_ID"];
        $_SESSION["fname"] = $emailExists["F_Name"];
        $_SESSION["lname"] = $emailExists["L_Name"];
        $_SESSION["role"] = $emailExists["User_Type"];

        header("Location:../home.php");
        exit();
    }
}

function createInquiry($conn, $name, $email, $company, $project, $description){
    $sql = "INSERT INTO inquiries (Name, Email, Company, Project, Description) VALUES (?, ?, ?, ?, ?);";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        header("Location:../contact-us.php?error=stmtfailed");
        exit();
    }

    $stmt->bind_param('sssss', $name, $email, $company, $project, $description);

    $stmt->execute();

    $stmt->close();

    header("Location:../contact-us.php?success=inquirySent");
    exit();
}
?>