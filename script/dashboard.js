fetch('../php/dashboard.php')
  .then(res => res.json())
  .then(data => {
    console.log(data);  // Check what data you're getting
    document.getElementById('total-users').textContent = data.total_users;
    document.getElementById('logged-in-users').textContent = data.logged_in_users;

    const tbody = document.getElementById('recent-users');
    tbody.innerHTML = "";
    data.recent_users.forEach(user => {
      const tr = document.createElement("tr");
      tr.innerHTML = `
        <td>${user.name}</td>
        <td>${user.email}</td>
        <td>${user.created_at}</td>
      `;
      tbody.appendChild(tr);
    });
  })
  .catch(err => console.error("Error loading dashboard:", err));
