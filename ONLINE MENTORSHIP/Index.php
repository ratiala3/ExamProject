<?php
include('config/app.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Website</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        nav {
            background-color: #333;
            padding: 10px;
            color: white;
            text-align: center;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        nav ul li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: white;
            font-weight: bold;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #4caf50;
        }
    </style>
</head>
<body>

<nav>
    <ul>
        <li><a href="about.html">About Us</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="dashboard.html">Dashboard</a></li>
    </ul>
</nav>


</body>
</html>
