<?php
   $username = "mohh3660";
   $password = "glxcdj";

   $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

   $sql = "INSERT INTO USER VALUES ('$_POST[username]','$_POST[fname]','$_POST[lname]','$_POST[password]','$_POST[email]',0,'$_POST[date]')"; 
   $sqlprofile = "INSERT INTO PROFILE(id) VALUES ('$_POST[username]')";
   
   if($conn->query($sql) && $conn->query($sqlprofile)) 
   {
       setcookie("username",$_POST[username],time()+3600);
       setcookie("password",$_POST[password],time()+3600);
       header('Location:profile.php?Message=Account successfully created!');
   } else {
        $err = $conn->errno; 
        $errtxt = $conn->error; 
        if($err)
        {
            header('Location:login.php?Error=Unable to register with username $_POST[username]. Please try again.');
        }
   }
?>


