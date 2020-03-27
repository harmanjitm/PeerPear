<?php
if(isset($_COOKIE["username"])) {
      
   $username = "mohh3660";
   $password = "glxcdj";

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "UPDATE PROFILE SET bio='$_POST[bio]', status='$_POST[status]', occupation='$_POST[occupation]' WHERE id='$_POST[username]'";
   
   if($conn->query($sql)) 
   {
       echo "<h3>Profile successfully updated!</h3>";
   } else {
        $err = $conn->errno; 
        $errtxt = $conn->error; 
        if($err)
        {
            echo "<h3>Unable to update profile.</h3>";
            echo "Error code: $err.\n$errtxt\nPlease contact an Admin."; 
        }
   }
   echo "<br><br>Click <a href=\"profile.php\">here</a> to view your profile."; 
} else {
    echo "<h3>You are not logged in!</h3><p> <a href=\"login.php\">Login</a></p>"; 
}
?>
