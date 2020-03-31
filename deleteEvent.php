<?php 
if(isset($_COOKIE["username"])) {
    $username = "mohh3660";
    $password = "glxcdj";

    $conn = new mysqli("vconroy.cs.uleth.ca",$username,$password,$username);
    
    $sql = "DELETE FROM EVENTS WHERE id='$_REQUEST[eventId]'";

    $result = $conn->query($sql);

    header('Location:events.php?Message=Event has been successfully deleted.');
} else {
    header('Location:login.php'); 
}
?>