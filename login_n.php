<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php

if (isset($_POST['submit'])) {
  $username=$_POST['username'];
  $password=$_POST['password'];
  if (($username=="adhwaa")&&($password=="123")) {
    echo "your information is correct";
  }
  else {
    echo "username or password is not correct";
  }
}
?>


<form action='controlpanel.php' methos='POST'>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="pwd">Password:</label><br>
  <input type="password" id="pwd" name="pwd"><br><br>
<input type='submit' class='button' value='Log in'>
</fors>
</body>
</html>
