<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
</head> 

<body>
<?php

// PROCESS LOGIN USING PHP
require "check.php";

?>
<!-- HTML LOGIN FORM -->

<form method="post">

<input type="text" name="user" required/> <input type="password" name="password" required/>

<input type="submit" value="Login"/>

</form>

</body>
</html>
