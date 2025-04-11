<?php
include 'database.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get data from the form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // Hash the password
    $created_at = $_POST['created_at'];
    $last_login = $_POST['last_login'] ?? NULL;  // Allow null for last_login if not provided

    // Prepare SQL query
    $stmt = $conn->prepare("INSERT INTO users (name, email, password, created_at, last_login) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $password, $created_at, $last_login);

    // Execute the query
    if ($stmt->execute()) {
        echo "User added successfully!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>

