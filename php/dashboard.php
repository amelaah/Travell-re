<?php
$conn = new mysqli("localhost", "root", "", "travelly");

// Add user when form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name     = $_POST["name"];
    $email    = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();
    $stmt->close();

    // Redirect after submitting to prevent form resubmission
    header("Location: dashboard.php");
    exit();
}

// Get all users (name + email only)
$users = [];
$result = $conn->query("SELECT name, email FROM users");
if ($result) {
    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
} else {
    echo "No users found+.";
}
$conn->close();
?>

