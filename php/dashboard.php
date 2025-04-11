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

$total = 0;

// Get total users
$result = $conn->query("SELECT COUNT(*) AS total FROM users");
if ($result && $row = $result->fetch_assoc()) {
    $total = $row['total'];
}

// Get recent users
$recent = [];
$result = $conn->query("SELECT name, email, created_at FROM users ORDER BY created_at DESC LIMIT 5");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $recent[] = $row;
    }
}
?>
