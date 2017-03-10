<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<?php

$con = mysql_connect("localhost","root","misakamikoto");
if(!$con){
	die('Connection to MySQL DB failed'. mysql_error());
}
$name = $_POST['mname'];
if((int)$_POST['type']==0){
	$type = 'DESC';
}
else $type = '';

mysql_select_db("sports", $con);
$result = mysql_query("SELECT * FROM {$name} ORDER BY Result ".$type);
while($row = mysql_fetch_array($result))
  {
  echo $row['pname'];
  echo " " . $row['Number'];
  echo " " . $row['Result'];
  echo "<br />";
  }
?>
<body>
</body>
</html>
