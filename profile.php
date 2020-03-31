<html style="position: relative; min-height: 100%;">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <title>PeerPear - Profile</title>
    </head>
    <body style="background-color: #E9E9E9; margin-bottom: 60px;">
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
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="categories.php">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <!-- Profile Button -->
                        <a class="nav-link" href="profile.php">Profile</a>
                    </li>
                    <li class="nav-item">
                        <!-- Logout Button -->
                        <a class="nav-link" href="login.php" onclick="document.cookie = 'username=\'\'; expires=Thu, 18 Dec 2013 12:00:00 UTC;';">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Content -->
        <br>
        <?php
            if(isset($_COOKIE["username"])) {
            } else {
                header('Location:login.php?Message=You have been logged out. Please login again.'); 
            }
        ?>
        <div class="container">
            <?php 
                if(!empty($_REQUEST['Message']))
                {
                    echo sprintf("<div class=\"alert alert-success\" role=\"alert\">%s</div>", $_REQUEST['Message']);
                }
            ?>
            <div class="card">
                <div class="card-body">
                    <img src="images/profile.png" class="mx-auto d-block rounded" width="17%"></img>
                    <?php 
                        $username = "mohh3660";
                        $password = "glxcdj";
                    
                        $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
                        
                        $sql = "SELECT * FROM USER u, PROFILE p WHERE u.username = p.id AND p.id = '$_COOKIE[username]'";
            
                        $result = $conn->query($sql);
            
                        if($result) {
                            $rec=$result->fetch_assoc();
                            echo "<h5 class=\"card-title text-center\">$rec[fname] $rec[lname]</h5>";
                            echo "<h5 class=\"text-center text-muted lead\">$rec[status]</h5>";
                            echo "<h5 class=\"text-center lead\">$rec[bio] - $rec[occupation]</h5>";
                            echo "<div class=\"form-group\"><label>Username</label><input disabled class=\"form-control\" value=\"$rec[username]\"></div>
                            <div class=\"form-group\"><label>First Name</label><input disabled class=\"form-control\" value=\"$rec[fname]\"></div>
                            <div class=\"form-group\"><label>Last Name</label><input disabled class=\"form-control\" value=\"$rec[lname]\"></div>
                            <div class=\"form-group\"><label>Email</label><input disabled class=\"form-control\" value=\"$rec[email]\"></div>
                            <div class=\"form-group\"><label>DOB</label><input disabled class=\"form-control\" value=\"$rec[dob]\"></div>";
                        } else {
                            echo "Problem fetching profile.";
                        }
                    ?>
                    <form id="delAccount" method="POST" action="deleteProfile.php"></form>
                    <div>
                        <a href="editProfile.php">
                            <button type="submit" class="btn btn-primary">Edit Profile</button>
                        </a>
                        <button onclick="if(confirm('Are you sure you want to delete your account?')==true)
                        {document.getElementById('delAccount').submit();}" type="submit" class="btn btn-danger text-right pull-right">Delete Account</button>
                    </div>
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

<script>

</script>