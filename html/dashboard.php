<!DOCTYPE html>
<html>
<head>
  <title>Travelly Admin Dashboard</title>
  <link rel="stylesheet" href="dashboard.css">
</head>
<body>
  <h1>Travelly Admin Dashboard</h1>

  <div class="cards">
    <div class="card">
      <h2>Total Users</h2>
      <p id="total-users">Loading...</p>
    </div>
    <div class="card">
      <h2>Users Who Logged In</h2>
      <p id="logged-in-users">Loading...</p>
    </div>
  </div>

  <h2>Recent Signups</h2>
  <table>
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Signed Up</th>
      </tr>
    </thead>
    <tbody id="recent-users">
      <tr><td colspan="3">Loading...</td></tr>
    </tbody>
  </table>

  <script src="../script/dashboard.js"></script>
</body>
</html>
