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

 what if we have many areas to make deletes? for this we only have one delete file

 <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" checked>
  <label class="form-check-label" for="flexSwitchCheckChecked">Checked switch checkbox input</label>

  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Default checkbox
  </label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>

<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
  <label class="form-check-label" for="inlineCheckbox1">1</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
  <label class="form-check-label" for="inlineCheckbox2">2</label>
</div>