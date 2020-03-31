<?php


$postID = $_GET['postid'];

if(isset($_COOKIE["username"])) {
            $username = "mohh3660";
            $password = "glxcdj";

            $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
            
            $sql = "UPDATE POST SET upvotes= upvotes -  1 WHERE id = $postID";


            if($conn->query($sql))
            {
                
                header("Location: posts.php");
            }
        } else {
            $err = $conn->errno; 
            $errtxt = $conn->error; 
            if($err)
            {
                echo "<h3>Unable to downvote </h3>";
                echo "Error code: $err.\n$errtxt\nPlease contact an Admin."; 
            }


        }



?>