<?php
include('config/app.php');
include('codes/authentication.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
   
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

<?php include('message.php'); ?>
<section id="signup">
    <h1>Sign Up</h1>
    <form action="" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="category">Select your category:</label>
    <input type="radio" id="mentor" name="category" value="mentor">
    <label for="mentor">Mentor</label>
    <input type="radio" id="mentee" name="category" value="mentee">
    <label for="mentee">mentee</label>
    <input type="radio" id="other" name="category" value="other">
    <label for="other">Other</label>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <label for="confirm password">Confirm Password:</label>
        <input type="password" id="password" name="cpassword" required>

        <button type="submit" name="submit">Sign Up</button>
    </form>
</section>

</body>
</html>
