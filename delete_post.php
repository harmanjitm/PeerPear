<?php
if(isset($_COOKIE["username"])) {
      
   $username = "mohh3660";
   $password = "glxcdj";

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "DELETE FROM POST WHERE id=$_POST[post_id]";
   
   if($conn->query($sql)) 
   {
       echo "<h3>Post successfully deleted!</h3>";
   } else {
        $err = $conn->errno; 
        $errtxt = $conn->error; 
        if($err)
        {
            echo "<h3>Unable to delete post.</h3>";
            echo "Error code: $err.\n$errtxt \nPlease contact an Admin."; 
        }
   }
   echo "<br><br><a href=\"posts.php\">Posts</a>."; 
} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"login.php\">Login</a></p>"; 
}
?>
