<?php

 // PROTECTED PAGE

 session_start();

 // LOGOUT

if (isset($_POST['logout'])) 
{ 
    unset($_SESSION['user']);
}


// BACK TO LOGIN PAGE IF NOT SIGNED IN if (lisset($_SESSION['user'])) { header("Location: login.php");
if (!isset($_SESSION['user'])) 
{ 
    header("Location: index.html");
    exit();
}
 ?>

 <!DOCTYPE html>

<html>
<head>

<title>Home Page</title>

</head>

<body>

<h1>WELCOME!</h1>

<!-- LOGOUT --> <form method="post">

<input type="hidden" name="logout" value="1"/>

<input type="submit" value="logout"/>

</form>

</body> </html>