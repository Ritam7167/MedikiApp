<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and Registration</title>
    <style>
        html {
            font-size: 16px; /* Default font size */
        }
        body {
            font-family: Arial, sans-serif;
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0;
            background-color: #f0f0f0;
        }
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
        .container {
            width: 18.75rem; /* 300px */
            background: #fff;
            padding: 1.25rem; /* 20px */
            box-shadow: 0 0 0.625rem rgba(0, 0, 0, 0.1); /* 10px */
            border-radius: 0.3125rem; /* 5px */
            margin-top: 3.125rem; /* 50px */
        }
        .form {
            display: none;
        }
        .form.active {
            display: block;
        }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%;
            padding: 0.625rem; /* 10px */
            margin: 0.3125rem 0; /* 5px */
            box-sizing: border-box;
        }
        button {
            width: 100%;
            padding: 0.625rem; /* 10px */
            margin: 0.625rem 0; /* 10px */
            cursor: pointer;
            background-color: #1b88ed;
            color: white;
            border: none;
            border-radius: 0.3125rem; /* 5px */
        }
        button:hover{
            background-color: #5e9bd3;
        }
        .toggle-link {
            display: block;
            text-align: center;
            cursor: pointer;
            color: blue;
            text-decoration: underline;
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
            .container {
                width: 100%;
                margin-top: 1.25rem; /* 20px */
                padding: 0.625rem; /* 10px */
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
        <div id="loginForm" class="form active">
            <h2>Login</h2>
            <form action="login_processing.php" method="POST">
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <button type="submit">Login</button>
            </form>
            <span id="register_form" class="toggle-link" onclick="toggleForms()">Don't have an account? Register</span>
        </div>
        <div id="registerForm" class="form">
            <h2>Register</h2>
            <form action="register_processing.php" method="POST">
                <input type="text" placeholder="First Name" name="fname" required>
                <input type="text" placeholder="Last Name" name="lname" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password" required>
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
                <button type="submit">Register</button>
            </form>
            <span class="toggle-link" onclick="toggleForms()">Already have an account? Login</span>
        </div>
    </div>

    <script>
        function toggleForms() {
            const loginForm = document.getElementById('loginForm');
            const registerForm = document.getElementById('registerForm');
            loginForm.classList.toggle('active');
            registerForm.classList.toggle('active');
        }

        function toggleMenu() {
            const menuList = document.getElementById('menuList');
            menuList.classList.toggle('active');
        }
    </script>
</body>
</html>

