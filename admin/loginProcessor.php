<?php
include("config.php");

$username = $_POST['username'];
$password = $_POST['password'];
$auto = $_POST['auto']; //To remember user with a cookie for autologin

//Login with credentials
$user->login($username, $password, $auto);

//not required, just an example usage of the built-in error reporting system
if ($user->signed) {
    header('Location: admin.php');
} else {
    //Display Errors
    foreach ($user->error() as $err) {
        echo "<b>Error:</b> {$err} <br/ >";
    }
}
?>