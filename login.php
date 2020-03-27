<html>
    <head>
        <title>CPSC3660 - Login</title>
    </head>
    <body>
        <h1>Login</h1>
	<?php 
	if(isset($_COOKIE["username"]))
	    header('Location:profile.php'); 
	?>
        <form action="query_account.php" method="post">
            Username: <input type="text" name="username" placeholder="Username"><br>
            Password: <input type="password" name="password" placeholder="Password"><br>
            <br>
            <input type="submit" value="Login"><br>
        </form>
	<p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </body>
</html>
