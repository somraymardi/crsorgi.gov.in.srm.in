admin login
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Portal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .nav-bar {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }
        .footer {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <nav class="nav-bar">
        <h1>Admin Portal</h1>
    </nav>
    <div class="container">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal">Login</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#registerModal">Register</button>
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="loginModalLabel">Login</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="loginUsername">Username</label>
                                <input type="text" class="form-control" id="loginUsername" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="loginPassword">Password</label>
                                <input type="password" class="form-control" id="loginPassword" placeholder="Enter password">
                            </div>
                            <div id="loginError"></div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="checkLogin()">Login</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="registerModalLabel">Register</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="registerUsername">Username</label>
                                <input type="text" class="form-control" id="registerUsername" placeholder="Enter username">
                            </div>
                            <div class="form-group">
                                <label for="registerPassword">Password</label>
                                <input type="password" class="form-control" id="registerPassword" placeholder="Enter password">
                            </div>
                            <div class="form-group">
                                <label for="confirmPassword">Confirm Password</label>
                                <input type="password" class="form-control" id="confirmPassword" placeholder="Confirm password">
                            </div>
                            <div id="registerError"></div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" onclick="registerAdmin()">Register</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="adminPage" style="display: none;">
            <h2>Retailer IDs</h2>
            <button type="button" class="btn btn-primary" onclick="createRetailerId()">Create Retailer ID</button>
            <table id="retailerIdsTable">
                <thead>
                    <tr>
                        <th>Retailer ID</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="retailerIdsTableBody">
                </tbody>
            </table>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2023 Admin Portal</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let admins = JSON.parse(localStorage.getItem('admins')) || [];
        let retailerIds = JSON.parse(localStorage.getItem('retailerIds')) || [];
        function checkLogin() {
            let username = document.getElementById('loginUsername').value;
            let password = document.getElementById('loginPassword').value;
            for (let admin of admins) {
                if (admin.username === username && admin.password === password) {
                    document.getElementById('loginModal').style.display = 'none';
                    document.getElementById('adminPage').style.display = 'block';
                    populateRetailerIdsTable();
                    return;
                }
            }
            document.getElementById('loginError').innerHTML = 'Invalid username or password';
        }
        function registerAdmin() {
            let username = document.getElementById('registerUsername').value;
            let password = document.getElementById('registerPassword').value;
            let confirmPassword = document.getElementById('confirmPassword').value;
            if (password !== confirmPassword) {
                document.getElementById('registerError').innerHTML = 'Password mismatch';
                return;
            }
            for (let admin of admins) {
                if (admin.username === username) {
                    document.getElementById('registerError').innerHTML = 'Username already exists';
                    return;
                }
            }
            admins.push({ username, password });
            localStorage.setItem('admins', JSON.stringify(admins));
            document.getElementById('registerModal').style.display = 'none';
            document.getElementById('loginModal').style.display = 'block';
        }
        function createRetailerId() {
            let Id = Math.floor(Math.random() * 1000000);
            retailerIds.push(Id);
            localStorage.setItem('retailerIds', JSON.stringify(retailerIds));
            populateRetailerIdsTable();
        }
        function deleteRetailerId(Id) {
            retailerIds = retailerIds.filter(id => id !== Id);
            localStorage.setItem('retailerIds', JSON.stringify(retailerIds));
            populateRetailerIdsTable();
        }
        function populateRetailerIdsTable() {
            let tableBody = document.getElementById('retailerIdsTableBody');
            tableBody.innerHTML = '';
            retailerIds.forEach(Id => {
                let row = document.createElement('tr');
                let cell1 = document.createElement('td');
                cell1.textContent = Id;
                let cell2 = document.createElement('td');
                let deleteButton = document.createElement('button');
                deleteButton.textContent = 'Delete';
                deleteButton.onclick = function() { deleteRetailerId(Id); };
                cell2.appendChild(deleteButton);
                row.appendChild(cell1);
                row.appendChild(cell2);
                tableBody.appendChild(row);
            });
        }
    </script>
</body>
</html>
