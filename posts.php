<html>
    <head>
        <title>CPSC3660 - Posts</title>
    </head>
    <body>
        <?php
	if(isset($_COOKIE["username"])) {
            $username = "mohh3660";
            $password = "glxcdj";

            $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
            
            $sql = "SELECT * FROM POST WHERE cid = 1";

            $result = $conn->query($sql);

            if($result->num_rows != 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<form action=\"delete_post.php\" method=\"post\">";
                    echo "<div>";
                    echo "<h2>$row[title]</h2>";
                    echo "<p>$row[body]</p><br>";
                    echo "<p>Upvotes: $row[upvotes]</p>";
                    echo "<input type=\"hidden\" name=\"post_id\" value=\"$row[id]\">";
                    echo "<input type=\"submit\" value=\"Delete\" name=\"delete\"><br><br>";
                    echo "</div>";
                    echo "</form><hr>";
                }
            } else {
		echo "<h2>No posts to display...</h2>";
	    }
	} else {
		header('Location:login.php'); 
	}
        ?>
    </body>
</html>
