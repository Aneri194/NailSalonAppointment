<?php
if(isset($_POST["email"]) && isset($_POST["Password"])) {
    $email = $_POST["email"];
    $Password = $_POST["Password"];
    require_once "db.php"; // Corrected file name to match your provided code.

    // SQL query to check user credentials
    $sql = "SELECT * FROM users WHERE email='$email' AND Password='$Password'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Login successful
        session_start();
        $_SESSION["email"] = $email;
        header("Location: index.php"); // Redirect to the home page after successful login
    } else {
        // Login failed
        echo "Login failed. Check your email and password.";
    }
}
?>
