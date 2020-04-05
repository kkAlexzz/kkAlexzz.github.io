<html lang="ru">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="..\str\style.css" type="text/css">
	<link rel="stylesheet" href="..\css\font-awesome.css" type="text/css">
	<title>Mag</title>
</head>
  <body>
<div> <a href="..\index.html"> </b> </a> </div>
<?php
$db=mysql_connect("localhost","root",""); mysql_select_db("fort",$db); 
if(isset($_POST['fam']))
{
$fam=$_POST['fam'];
}
if(isset($_POST['imya']))
{
$imya=$_POST['imya'];
}
if(isset($_POST['otchestvo']))
{
$otchestvo=$_POST['otchestvo'];
}
if(isset($_POST['meropri']))
{
$meropri=$_POST['meropri'];
}
if(isset($_POST['data']))
{
$data=$_POST['data'];
}
if(isset($_POST['tel']))
{
$tel=$_POST['tel'];
}

$result=mysql_query("INSERT INTO 'zapis' ('fam','imya','otchestvo','meropri','data','tel') VALUES ('$fam','$imya','$otchestvo','$meropri','$data','$tel')");
if ($result=='true')
{echo"<h1> Информация в базу успешно добавлена </h1>";}
else {echo"<h1> Информация в базу НЕ добавлена </h1>";}
?>
<a href="..\index.html"><center><h1> ВЕРНУТЬСЯ </h1> </center></a>