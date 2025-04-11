document.addEventListener("DOMContentLoaded", () => {
  fetchData("../getTotalUsers.php", "total-users");
  fetchData("../getLoggedInUsers.php", "logged-in-users");
  fetchRecentUsers("../getRecentSignups.php", "recent-users");
});

function fetchData(url, elementId) {
  fetch(url)
    .then((response) => response.text())
    .then((data) => {
      document.getElementById(elementId).textContent = data;
    })
    .catch((err) => {
      console.error(err);
      document.getElementById(elementId).textContent = "Error loading data.";
    });
}

function fetchRecentUsers(url, tableId) {
  fetch(url)
    .then((response) => response.json())
    .then((users) => {
      const tbody = document.getElementById(tableId);
      tbody.innerHTML = "";

      users.forEach((user) => {
        const row = document.createElement("tr");
        row.innerHTML = `
          <td>${user.name}</td>
          <td>${user.email}</td>
          <td>${user.signed_up}</td>
        `;
        tbody.appendChild(row);
      });
    })
    .catch((err) => {
      console.error(err);
      document.getElementById(tableId).innerHTML =
        "<tr><td colspan='3'>Failed to load users.</td></tr>";
    });
}
