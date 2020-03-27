<html style="position: relative; min-height: 100%;">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <title>PeerPear - Homepage</title>
    </head>
    <body style="background-color: #E9E9E9; margin-bottom: 60px;">
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
                    <li class="nav-item">
                        <!-- Login Button -->
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item active">
                        <!-- Register Button -->
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content -->
        <br>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Register</h5>
                    <form action="insert_user.php" method="post">
                        <div class="form-group">
                            <label>Username</label>
                            <input class="form-control" type="text" name="username" placeholder="Username" required>
                        </div>
                        <div class="form-group">
                            <label>First Name</label>
                        <input class="form-control" type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" name="lname" placeholder="Last Name" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input class="form-control" type="password" name="password" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input class="form-control" type="password" name="password2" placeholder="Confirm Password">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <label>Date of Birth</label>
                            <input type="date" name="date" placeholder="Date" class="form-control">
                            <small class="form-text text-muted">Your birthday is required to verify your age.</small>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit" value="Register">Register</button>
                    </form>
                    <h6 class="card-subtitle mb-2 text-muted">
                        Already have an account?
                        <a href="login.php">Login here</a>.
                    </h6>
                </div>
            </div>
        </div>
        <!-- Footer -->
        <br>
        <footer class="page-footer font-small bg-dark" style="height: 60px; width: 100%; position: absolute; bottom: 0;">
            <div class="footer-copyright text-center py-3 text-light">
                Copyright 2020 PeerPear
            </div>
        </footer>
    </body>
</html>