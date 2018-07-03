<?php
//this php script will log the uck admin in
include('classes/DB.php');
//checking the button was pressed
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(DB::query("SELECT *FROM users WHERE username=:username AND password=:password", array(':username' => $username , ':password' => $password))){
      echo "Yes! You are logged in!";

    }
    else {
      echo "Shooo! Go away..";
    }
}
 ?>
















<form action="" method="post">
<input type="text" name="username" placeholder="Enter your username">
<input type="password" name="password" placeholder="Enter your password">
<input type="submit" name="submit" value="login">
</form>
