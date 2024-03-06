<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kwmcsattendence";

   
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO attendance (date, name, phone, department, login_logout, leave_status, reason) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $date, $name, $phone, $department, $loginLogout, $leave, $reason);

   
    $date = $_POST["date"];
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $department = $_POST["department"];
    $loginLogout = $_POST["loginLogout"];
    $leave = isset($_POST["leave"]) ? "Yes" : "No";
    $reason = isset($_POST["reason"]) ? $_POST["reason"] : "";

    if ($stmt->execute()) {
        echo "Records inserted successfully.";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
