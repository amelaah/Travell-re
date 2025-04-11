<!DOCTYPE html>
<html>
<head>
    <title>Travelly Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
</head>
<body>

    <h1>Travelly - Admin Dashboard</h1>

    <section class="add-user">
        <h2>Add User</h2>
        <form method="POST" action="dashboard.php">
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Add User</button>
        </form>
    </section>

    <section class="user-list">
        <h2>All Users</h2>
        <table>
            <tr>
                <th>Name</th>
                <th>Email</th>
            </tr>
            <?php include 'dashboard.php'; foreach ($users as $user): ?>
                <tr>
                    <td><?= htmlspecialchars($user['name']) ?></td>
                    <td><?= htmlspecialchars($user['email']) ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </section>

</body>
</html>

