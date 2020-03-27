<?php
   $username = "mohh3660";
   $password = "glxcdj";

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "INSERT INTO USER VALUES ('$_POST[username]','$_POST[fname]','$_POST[lname]','$_POST[password]','$_POST[email]',0,'$_POST[date]')"; 
   $sqlprofile = "INSERT INTO PROFILE(id) VALUES ('$_POST[username]')";
   
   if($conn->query($sql) && $conn->query($sqlprofile)) 
   {
       echo "<h3>New account successfully created!</h3>";
       setcookie("username",$_POST[username],time()+3600);
       setcookie("password",$_POST[password],time()+3600);
       echo "Click <a href=\"profile.php\">here</a> to go to your profile.";
   } else {
        $err = $conn->errno; 
        $errtxt = $conn->error; 
        if($err)
        {
            echo "<h3>Unable to register with username: $_POST[username]</h3>";
            echo "Error code: $err.\n$errtxt\nPlease contact an Admin."; 
        }
   }
?>


