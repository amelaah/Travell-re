
<!DOCTYPE html>
<html>
<head>
    <title>Travelly Dashboard</title>
    <style>
        body { font-family: sans-serif; max-width: 700px; margin: 30px auto; }
        h1 { color: #444; }
        .box { background: #f9f9f9; padding: 15px; margin-bottom: 20px; border-radius: 8px; border: 1px solid #ddd; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        th, td { padding: 8px; border-bottom: 1px solid #ccc; text-align: left; }
        input { padding: 8px; margin: 5px 0; width: 100%; box-sizing: border-box; }
        button { padding: 10px 15px; background: #2d89ef; color: white; border: none; cursor: pointer; }
        button:hover { background: #1b66c9; }
    </style>
</head>
<body>

    <h1>Travelly Dashboard</h1>

    <div class="box">
        <strong>Total Users:</strong> <?php echo $total; ?>
    </div>

    <div class="box">
        <h2>Add User</h2>
        <form method="POST">
            <label>Name</label>
            <input type="text" name="name" required>
            
            <label>Email</label>
            <input type="email" name="email" required>
            
            <label>Password</label>
            <input type="password" name="password" required>
            
            <button type="submit">Add User</button>
        </form>
    </div>

    <div class="box">
        <h2>Recent Users</h2>
        <table>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Created At</th>
    </tr>
    <?php foreach ($recent as $row): ?>
        <tr>
            <td><?= htmlspecialchars($row["name"]) ?></td>
            <td><?= htmlspecialchars($row["email"]) ?></td>
            <td><?= $row["created_at"] ?></td>
        </tr>
    <?php endforeach; ?>
</table>

    </div>

</body>
</html>
