<!DOCTYPE html>
<html>
<body>

<h1>Welcome to this mananging system!</h1>
<br>
<h1>Please note this site is using apache + php + MariaDB, so don't be surprised if this system or the database fucked.</h1>
<br>
<h1>Do NOT XSS this shit</h1>
<h1>Make damn sure there is a database called sports and results should be INTEGER!</h1>
sql config:
in sports, one table names exists
one entry is number,int and the other is name,varchar(20)<br>
<form action="get_num_sql.php" method="post">
Match Name: <input type="text" name="mname"><br>
Number1: <input type="text" name="number1">
Result1: <input type="text" name="result1"><br>
Number2: <input type="text" name="number2">
Result2: <input type="text" name="result2"><br>
Number3: <input type="text" name="number3">
Result3: <input type="text" name="result3"><br>
Number4: <input type="text" name="number4">
Result4: <input type="text" name="result4"><br>
Number5: <input type="text" name="number5">
Result5: <input type="text" name="result5"><br>
Number6: <input type="text" name="number6">
Result6: <input type="text" name="result6"><br>
Type:
<input type="submit">
</form>

<form action="check_num_sql.php" method="post">
Match Name: <input type="text" name="mname"><br>
Type:
<input type="radio" name="type" value="0">Athletic
<input type="radio" name="type" value="1">Track
<input type="submit">
</form>



<a href=\"localhost/phpmyadmin\">PHPMyAdmin Page</a>
<?php
echo "This is PHPInfo.";
phpinfo();
?>