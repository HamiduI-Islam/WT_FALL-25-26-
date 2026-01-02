<?php
include "../DB/db.php";

session_start();
$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_name = $_POST["username"];
    $password = $_POST["password"];

    if (empty($user_name) || empty($password)) {
        $error = "All fields are required!";
    } else {
        $sql = "SELECT * FROM Admin WHERE User_Name = '$user_name'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            
            if ($password == $row['Password']) {
                $_SESSION['admin_name'] = $row['User_Name'];
                header("Location: ../HTML/dashboard.html");
                exit();
            } else {
                $error = "Invalid password!";
            }
        } else {
            $error = "Admin not found!";
        }
    }
}

if (!empty($error)) {
    echo "<p style='color:red;'>" . $error . "</p>";
    echo "<a href='../HTML/login.html'>Go Back</a>";
}
?>