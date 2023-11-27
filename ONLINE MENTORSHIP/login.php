<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
  
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            box-sizing: border-box;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>


<nav>
    <ul>
        <li><a href="about.html">About Us</a></li>
        <li><a href="login.html">Login</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="signup.html">Sign Up</a></li>
        <li><a href="dashboard.html">Dashboard</a></li>
    </ul>
</nav>


<section id="login">
    <h1>Login</h1>
    <form action="process_login.php" method="post">
        <label for="usernameOrEmail">Username or Email:</label>
        <input type="text" id="usernameOrEmail" name="usernameOrEmail" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <button type="submit">Login</button>
    </form>
</section>


</body>
</html>
