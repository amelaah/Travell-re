<?php
// Connect to database
$conn = new mysqli("localhost", "root", "", "travelly");

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    $stmt->close();
    header("Location: dashboard.php"); // Refresh to clear form
    exit();
}


// Get recent users
$users = [];
$result = $conn->query("SELECT name, email,FROM users ");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $recent[] = $row;
    }
}
?>
