<?php
include 'database.php';

// Count total users
$total_users = $conn->query("SELECT COUNT(*) AS total FROM users")->fetch_assoc()['total'];

// Count users who have logged in at least once
$logged_in_users = $conn->query("SELECT COUNT(*) AS total FROM users WHERE last_login IS NOT NULL")->fetch_assoc()['total'];

// Get last 5 signed up users
$recent_users = $conn->query("SELECT name, email, created_at FROM users ORDER BY created_at DESC LIMIT 5");

$data = [
    "total_users" => $total_users,
    "logged_in_users" => $logged_in_users,
    "recent_users" => []
];

while ($row = $recent_users->fetch_assoc()) {
    $data["recent_users"][] = $row;
}

header('Content-Type: application/json');
echo json_encode($data);
?>
