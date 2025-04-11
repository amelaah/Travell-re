<?php
include 'database.php';  // Make sure this includes your database connection

// Get total users
$total_users_query = "SELECT COUNT(*) AS total FROM users";
$total_users_result = $conn->query($total_users_query);
$total_users = $total_users_result->fetch_assoc()['total'];

// Get logged-in users (those who have a last_login timestamp)
$logged_in_query = "SELECT COUNT(*) AS total FROM users WHERE last_login IS NOT NULL";
$logged_in_result = $conn->query($logged_in_query);
$logged_in_users = $logged_in_result->fetch_assoc()['total'];

// Get the 5 most recent users
$recent_users_query = "SELECT name, email, created_at FROM users ORDER BY created_at DESC LIMIT 5";
$recent_users_result = $conn->query($recent_users_query);

$recent_users = [];
while ($row = $recent_users_result->fetch_assoc()) {
    $recent_users[] = $row;
}

?>

