<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
</head>
<?php
$con = mysql_connect("localhost","root","misakamikoto");
if(!$con){
	die('Connection to MySQL DB failed'. mysql_error());
}
{
echo "Connection Success";
$name = $_POST["mname"];
mysql_select_db("sports", $con);
$sql_com = "CREATE TABLE {$name}
(Result int,
Number int,
pname varchar(20);
";
}
mysql_query($sql_com,$con);
if(!$con){
	die('new table creation faield'. mysql_error());
}
echo "table {$name} creation successful";
{
$realnumber = (int)$_POST["number2"];
$realrelsul = (int)$_POST["result2"];
$result = mysql_query("SELECT * FROM names");
$realname = '';
while($row = mysql_fetch_array($result)){
	if($row['number'] == $realnumber){
		$realname = $row['name'];
	}
	break;
}
	
$sql_com = NULL;
$sql_com = "INSERT INTO {$name} (Result, Number, pname)
VALUES ('{$realrelsul}', '{$realnumber}', '{$realname}')";
mysql_query($sql_com,$con);
if(!$con){
	die('new query insert faield'. mysql_error());
}
echo "ath {$realname} creation successful";
}
{
$realnumber = (int)$_POST["number2"];
$realrelsul = (int)$_POST["result2"];
$result = mysql_query("SELECT * FROM names");
$realname = '';
while($row = mysql_fetch_array($result)){
	if($row['number'] == $realnumber){
		$realname = $row['name'];
	}
	break;
}
	
$sql_com = NULL;
$sql_com = "INSERT INTO {$name} (Result, Number, pname)
VALUES ('{$realrelsul}', '{$realnumber}', '{$realname}')";
mysql_query($sql_com,$con);
if(!$con){
	die('new query insert faield'. mysql_error());
}
echo "ath {$realname} creation successful";
}
{
$realnumber = (int)$_POST["number3"];
$realrelsul = (int)$_POST["result3"];
$result = mysql_query("SELECT * FROM names");
$realname = '';
while($row = mysql_fetch_array($result)){
	if($row['number'] == $realnumber){
		$realname = $row['name'];
	}
	break;
}
	
$sql_com = NULL;
$sql_com = "INSERT INTO {$name} (Result, Number, pname)
VALUES ('{$realrelsul}', '{$realnumber}', '{$realname}')";
mysql_query($sql_com,$con);
if(!$con){
	die('new query insert faield'. mysql_error());
}
echo "ath {$realname} creation successful";
}
{
$realnumber = (int)$_POST["number4"];
$realrelsul = (int)$_POST["result4"];
$result = mysql_query("SELECT * FROM names");
$realname = '';
while($row = mysql_fetch_array($result)){
	if($row['number'] == $realnumber){
		$realname = $row['name'];
	}
	break;
}
	
$sql_com = NULL;
$sql_com = "INSERT INTO {$name} (Result, Number, pname)
VALUES ('{$realrelsul}', '{$realnumber}', '{$realname}')";
mysql_query($sql_com,$con);
if(!$con){
	die('new query insert faield'. mysql_error());
}
echo "ath {$realname} creation successful";
}
{
$realnumber = (int)$_POST["number5"];
$realrelsul = (int)$_POST["result5"];
$result = mysql_query("SELECT * FROM names");
$realname = '';
while($row = mysql_fetch_array($result)){
	if($row['number'] == $realnumber){
		$realname = $row['name'];
	}
	break;
}
	
$sql_com = NULL;
$sql_com = "INSERT INTO {$name} (Result, Number, pname)
VALUES ('{$realrelsul}', '{$realnumber}', '{$realname}')";
mysql_query($sql_com,$con);
if(!$con){
	die('new query insert faield'. mysql_error());
}
echo "ath {$realname} creation successful";
}
{
$realnumber = (int)$_POST["number6"];
$realrelsul = (int)$_POST["result6"];
$result = mysql_query("SELECT * FROM names");
$realname = '';
while($row = mysql_fetch_array($result)){
	if($row['number'] == $realnumber){
		$realname = $row['name'];
	}
	break;
}
	
$sql_com = NULL;
$sql_com = "INSERT INTO {$name} (Result, Number, pname)
VALUES ('{$realrelsul}', '{$realnumber}', '{$realname}')";
mysql_query($sql_com,$con);
if(!$con){
	die('new query insert faield'. mysql_error());
}
echo "ath {$realname} creation successful";
}
?>
<body>
</body>
</html>