<?php
// updating the cookie
setcookie("username", "iamNOTabhishek", time() - 3600);
?>
<html>
 <body>
 <?php
 echo "cookie username is deleted!";
 ?>
 </body>
</html>