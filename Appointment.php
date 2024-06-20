<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD App</title>
   
    <link rel="stylesheet" href="script.css">
    <script src="script.js"></script>
    
    <style>
        .navbar {
            width: 100%;
            background-color: #333;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0.5rem 1rem;
            box-sizing: border-box;
        }
        .navbar .menu-list {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            flex-grow: 1;
        }
        .navbar a {
            color: #f2f2f2;
            text-align: center;
            padding: 0.875rem 1.25rem; /* 14px 20px */
            text-decoration: none;
        }
        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }
        .navbar .logout {
            margin-left: auto;
        }
        .navbar .logout button {
            background-color: #ff4c4c;
            border: none;
            color: white;
            padding: 0.875rem 1.25rem; /* 14px 20px */
            cursor: pointer;
            text-align: center;
        }
        .navbar .logout button:hover {
            background-color: #d93636;
        }
        .navbar .menu-icon {
            display: none;
            padding: 0.875rem 1.25rem; /* 14px 20px */
            cursor: pointer;
            color: white;
        }
        button {
            width: 100%;
            padding: 0.625rem; /* 10px */
            margin: 0.625rem 0; /* 10px */
            cursor: pointer;
            /* background-color: #007BFF; */
            color: white;
            border: none;
            border-radius: 0.3125rem; /* 5px */
        }
        
        @media screen and (max-width: 600px) { /* 37.5rem */
            .navbar {
                flex-direction: column;
                align-items: flex-start;
            }
            .navbar .menu-icon {
                display: block;
            }
            .navbar .menu-list {
                display: none;
                flex-direction: column;
                width: 100%;
            }
            .navbar .menu-list.active {
                display: flex;
            }
            .navbar a, .navbar .logout button {
                text-align: left;
                padding: 0.625rem; /* 10px */
                width: 100%;
            }
            
        }
    </style>
</head>

<body>

    <div class="navbar">
        <span class="menu-icon" onclick="toggleMenu()">&#9776;</span>
        <div class="menu-list" id="menuList">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
        </div>
        <div class="logout">
            <form action="logout.php" method="POST">
                <button type="submit">Logout</button>
            </form>
        </div>
    </div>
    <div class="container">
        <h1>CRUD App</h1>
        <div id="form-container">
            <input type="text" id="id" placeholder="ID" disabled>
            <input type="text" id="summary" placeholder="Summary">
            <input type="text" id="description" placeholder="Description">
            <input type="text" id="location" placeholder="Location">
            <input type="datetime-local" id="startTime">
            <input type="datetime-local" id="endTime">
            <button onclick="addItem()">Add</button>
        </div>

        <table id="data-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Summary</th>
                    <th>Description</th>
                    <th>Location</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                </tr>
            </thead>
            <tbody id="table-body"></tbody>
        </table>
    </div>

    <script>
        // function toggleForms() {
        //     const loginForm = document.getElementById('loginForm');
        //     const registerForm = document.getElementById('registerForm');
        //     loginForm.classList.toggle('active');
        //     registerForm.classList.toggle('active');
        // }

        function toggleMenu() {
            const menuList = document.getElementById('menuList');
            menuList.classList.toggle('active');
        }
    </script>
    
</body>

</html>