<html>
<head><title>CPSC3660 - Register</title></head>
<body>
    <h1>Register</h1>
    <form action="insert_user.php" method="post">
        <input type="text" name="username" placeholder="Username" required><br>
        <input type="text" name="fname" placeholder="First Name" required><br>
        <input type="text" name="lname" placeholder="Last Name" required><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="password2" placeholder="Confirm Password"><br>
        <input type="email" name="email" placeholder="Email"><br>
        <input type="date" name="date" placeholder="Date"><br><br>
        <input type="submit" name="submit" value="Register">
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
</body>
