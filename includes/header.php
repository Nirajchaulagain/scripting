<?php
    session_start();
?>



<!DOCTYPE html>

<html>
<head>
    <title>BLoG SITE</title>
<br>
    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
   
    
    <a href="index.php">Home</a> &nbsp;
    <a href="about.php">About us</a> &nbsp;
    <a href="bloglist.php">Blogs</a> &nbsp;
    <a href="contact.php">Contact us</a> &nbsp;


</head>
<body>



<?php

$cookie_name = "username";
$cookie_value = "Nirajchaulagain";

setcookie($cookie_name, $cookie_value,time() + (86400 * 30));


$_SESSION['user_id'] = "nirajchaulgain012@gmail.com";




?>

    
