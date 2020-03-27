<html style="position: relative; min-height: 100%;">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <link href="login.css" rel="stylesheet">
        <title>PeerPear - Homepage</title>
    </head>
    <body class = "text-center" style="background-color: #E9E9E9; margin-bottom: 60px;">
        <?php 
        if(isset($_COOKIE["username"]))
            header('Location:profile.php'); 
        ?>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <a class="navbar-brand" href="#">
                <img height="auto" width="30px" src="images/logo.png"/>
                PeerPear
            </a>
            <!-- Small screen navbar button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navDropdown" aria-controls="navDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Navbar Items-->
            <div class="navbar-collapse collapse" id="navDropdown">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <!-- Login Button -->
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <!-- Register Button -->
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content -->
        <br>
        <div class="container">
            <form action="query_account.php" method="post" class="form-signin">
                <img class="mb-4" src="images/logo.png" alt="" width="72" height="auto">
                <h1 class="h3 mb-3 font-weight-normal">Please sign-in</h1>
                <label for="inputEmail" class="sr-only">Username</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="Username" name="username" required autofocus>
                <label for="inputPassword" class="sr-only">Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="password">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                <div class="checkbox mb-3">
                    <input type="checkbox" value="remember-me"> Remember me
                </div>
                <h6 class="card-subtitle mb-2 text-muted">
                    Don't have an account?
                    <a href="register.php">Register here</a>.
                </h6>
            </form>
        </div>
        <!-- Footer -->
        <footer class="page-footer font-small bg-dark" style="height: 60px; width: 100%; position: absolute; bottom: 0;">
            <div class="footer-copyright text-center py-3 text-light">Copyright 2020 PeerPear
            </div>
        </footer>
    </body>
</html>