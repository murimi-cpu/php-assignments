<!-- redirect function -->
header("Location: anotherDirectory/anotherFile.php");
<!-- xss ,its good practictice to use htmlspecialchars,htmlentities-->
      -htmlspecialchars
      -hmtl entities
      -string replace
      -mysql_real_escape_string
      
      <!-- $lastname  = "O'Reilly";
$_lastname = mysql_real_escape_string($lastname); in MYSQL -->
Include and require
<!-- when a file is included with the include statement and PHP cannot find it, the script will continue to execute: -->
<!-- ECxample <?php
echo "<p>Copyright &copy; 1999-" . date("Y") . " W3Schools.com</p>";
              ?> --> as footer.php

require
<!-- using the require statement, the echo statement will not be executed because the script execution dies after the require statement
 returned a fatal error: -->


 while access many different databases, the best db connection method is:pdo
<!-- fetch functions -->
 Fetch one and one row,many rows,i column,many columns
