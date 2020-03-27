<?php
if(isset($_COOKIE["username"])) {
    echo "You are already logged in. <a href=\"profile.php\">Click here</a>.";
} else {
    $username = "mohh3660";
    $password = "glxcdj";

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);

    $sql = "SELECT username, password FROM USER WHERE username='$_POST[username]' AND password='$_POST[password]'";

    $result = $conn->query($sql);
    if($result->num_rows != 1) {
        echo "Username or password does not exist.\nRegister <a href=\"register.php\">here</a>.";
    } else {
        setcookie("username",$_POST[username],time()+3600);
        setcookie("password",$_POST[password],time()+3600);

        header('Location:profile.php'); 
    }
}

?>
