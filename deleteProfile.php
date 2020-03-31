<?php 
if(isset($_COOKIE["username"])) {
    $username = "mohh3660";
    $password = "glxcdj";

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    
    $sql = "DELETE FROM USER WHERE username='$_COOKIE[username]'";

    $result = $conn->query($sql);

    setcookie("username", "", time() - 3600);
    setcookie("password", "", time() - 3600);
    header('Location:login.php?Message=Your account has been successfully deleted.');
} else {
    header('Location:login.php'); 
}
?>