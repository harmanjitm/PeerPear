<html>
    <head>
        <title>CPSC3660 - Profile</title>
    </head>
    <body>
        <?php
	if(isset($_COOKIE["username"])) {
            $username = "mohh3660";
            $password = "glxcdj";
         
            $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
            
            $sql = "SELECT * FROM PROFILE WHERE id = '$_COOKIE[username]'";

            $result = $conn->query($sql);

            if($result) {
                echo "<form action=\"update_profile.php\" method=post>";
                $rec=$result->fetch_assoc();
                echo "Username: <input type=\"text\" name=\"username\" value=\"$rec[id]\"><br>";
                echo "Status: <input type=\"text\" name=\"status\" value=\"$rec[status]\"><br>";
                echo "Occupation: <input type=\"text\" name=\"occupation\" value=\"$rec[occupation]\"><br>";
                echo "Bio: <input type=\"text\" name=\"bio\" value=\"$rec[bio]\"><br>";
		echo "<br><input type=\"submit\" value=\"Update\">";
                echo "</form>";
            } else {
                echo "Problem fetching profile.";
            }
	} else {
		header('Location:login.php'); 
	}
        ?>
	<p>To view all posts, click <a href="posts.php">here</a>.</p>
    </body>
</html>
