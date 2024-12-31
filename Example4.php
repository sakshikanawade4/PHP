<?php
// start the session
session_start();
// set the session variable
$_SESSION["username"] = "iamabhishek";
$_SESSION["userid"] = "1";
?>
<html>
 <body>
 <?php
 echo "Session variable is set.";
 ?>
 <a href="second_page.php">Go to Second Page</a>
 </body>
</html>