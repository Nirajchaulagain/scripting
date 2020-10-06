<?php

include_once 'config/db_conn.php';



include 'includes/header.php'
?>

<h3><a href="addblog.php">Create New Blog</a></h3>

<?php

$sqlquery = "SELECT * FROM blog;";

$data = mysqli_query($conn,$sqlquery);

foreach ($data as $unitdata):?>
<h5>
<?php
 echo $unitdata['id'];?>
 </h5>

 <h5>
<?php
 echo $unitdata['title'];?>
 </h5>

 <p>
<?php
 echo $unitdata['details'];?>
 </p>

 <a href="#">Readmore</a>

 <?php endforeach ; ?>
 



?>








<br>
<br>
<br>

<br><br>
<br><br>
<br><br>
<br>

<h3>This is the bl0g secti0n  0f web page </h3>

<br>
<br><br>
<br><br>
<br>

<?php
include 'includes/footer.php'
?>