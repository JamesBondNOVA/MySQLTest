<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mysql Test</title>
<style type="text/css">
body{
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:12px;
	font-style:inherit;
	background-color:#AF0000;
}
.row{
	text-align:left;
}
#footer{
	text-align:center;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-size:12px;
	font-style:inherit;
}
a {
	text-decoration:none;
}
a:hover {
	text-decoration:underline;
}
#nova{
	background-color:#ECECEC;
	border:1px solid;
	margin:0 auto;
	width:270px;
}
</style>
</head>
<body>
<div id="nova">
<div id="header">
<h3 align="center">MySQL Veritabanı Kontrol Sistemi</h3>
</div>
<?
$host=$_POST['host'];
$user=$_POST['user'];
$pass=$_POST['pass'];
$db=$_POST['db'];
if($host==null and $db==null and $pass==null and $user==null){
	echo '<div align="center">
<form action="MysqlTest.php" method="post">
<table>
<tr>
<td class="row">HostName: </td><td><input type="text" name="host" /></td>
</tr>
<tr>
<td class="row">UserName: </td><td><input type="text" name="user" /></td>
</tr>
<tr>
<td class="row">PassWord: </td><td><input type="password" name="pass" /></td>
</tr>
<tr>
<td class="row">DataBase: </td><td><input type="text" name="db" /></td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" value="Mysql Bağlantısı Test Et" name="MysqlOpen" /></td>
</tr>
</table>
</form>
</div>';
}
else{
	$connect = mysql_connect($host, $user, $pass);
	if($connect){
		$database = mysql_select_db($db,$connect);
		if($database){
			echo "<center>Başarılı bir şekilde Mysql Bağlantısı kuruldu.</center><br />";
			mysql_close($connect);
			echo "<center>5 saniye içinde sayfa yenilenecek.</center><br />";
			header("Refresh: 5;");
			$db=null;	$host=null;		$user=null;		$pass=null;
		}else {die("<center>Mysql Veritanabı Bağlantı Hatası...</center><br />");}
	}else {
		echo "<center>5 saniye içinde sayfa yenilenecek.</center> <br />";
		header("Refresh: 5;");
		$db=null;	$host=null;		$user=null;		$pass=null;	
		die("<center>Mysql Bağlantısı Başarısız.</center> <br />");
			
		}
}
?>

<div id="footer" align="center">
<br />
Powered by <a target="_blank" href="http://www.turknova.net/JamesBond-u-15657.ts">JamesBond</a> Copyright © 2013 
</div>
</div>
</body>
</html>
