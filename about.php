<?php

include 'includes/header.php'
?>
<br>
<br>
<br>

<br><br>
<br><br>
<br><br>
<br>

<h3>This is the ab0ut secti0n  0f web page </h3>

<br>
<br><br>

<?php

if(!isset($_COOKIE[$cookie_name]))
{
    echo "Cookie name is not set";
}
else{
    echo "Cookie" .$cookie_name. "is set.";
    echo "and the value is".$cookie_value;
}

if(!isset($_SESSION["user_id"]))
{
    echo "<br> <h4>you are not currently authenticated </h4>";
}
else{
    echo " <br> session is availabile and you are logged in as: ".$_SESSION['user_id'];
   
}






?>


<br><br>
<br>

<?php
include 'includes/footer.php'
?>