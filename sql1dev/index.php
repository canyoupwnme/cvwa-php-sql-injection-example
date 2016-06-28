<!---	
	
 $$$$$$\   $$$$$$\  $$\   $$\ $$\     $$\  $$$$$$\  $$\   $$\ $$$$$$$\  $$\      $$\ $$\   $$\ 
$$  __$$\ $$  __$$\ $$$\  $$ |\$$\   $$  |$$  __$$\ $$ |  $$ |$$  __$$\ $$ | $\  $$ |$$$\  $$ |
$$ /  \__|$$ /  $$ |$$$$\ $$ | \$$\ $$  / $$ /  $$ |$$ |  $$ |$$ |  $$ |$$ |$$$\ $$ |$$$$\ $$ |
$$ |      $$$$$$$$ |$$ $$\$$ |  \$$$$  /  $$ |  $$ |$$ |  $$ |$$$$$$$  |$$ $$ $$\$$ |$$ $$\$$ |
$$ |      $$  __$$ |$$ \$$$$ |   \$$  /   $$ |  $$ |$$ |  $$ |$$  ____/ $$$$  _$$$$ |$$ \$$$$ |
$$ |  $$\ $$ |  $$ |$$ |\$$$ |    $$ |    $$ |  $$ |$$ |  $$ |$$ |      $$$  / \$$$ |$$ |\$$$ |
\$$$$$$  |$$ |  $$ |$$ | \$$ |    $$ |     $$$$$$  |\$$$$$$  |$$ |      $$  /   \$$ |$$ | \$$ |
 \______/ \__|  \__|\__|  \__|    \__|     \______/  \______/ \__|      \__/     \__|\__|  \__|


--> 
<html>
<head>
<title>CYPM Level 1</title>

<script language="javascript">
document.onmousedown=disableclick;
status="Right Click Disabled";
function disableclick(event)
{
  if(event.button==2)
   {
     
     return false;    
   }
}
</script>
</head>
<body oncontextmenu="return false">
<center>
<form action="index.php" method="POST">
<b>Get user info :</b><br>
Username :  <input type="text" name="username"></input><br><br>
<input type="Submit" value="Login"></input>
</form>
<?php 
$baglan = @mysql_connect('localhost','root','123456')or die("Not connected MYSQL");
$veritabani = @mysql_select_db('cypmsqli') or die("Not connected database");
$username = $_POST['username'];
if ($username == "cypmroot") {
	echo "4e18e310313caafddb2bbdf30<font color='#fff'>76629ff /128bit encryption</font> Are you sure ? ";
}
$query = "SELECT * from users where username='$username'";
$sonuc = mysql_query($query);
$result = mysql_fetch_array($sonuc);
if($result){
	echo "<b>Username : </b>".$result['username']."<br>";
	echo "<b>Password : </b>".$result['password']."<br>";
	echo "<b>E-Mail : </b>".$result['email']."<br>";

}else{
	print_r(mysql_error());
}

?>






</center>
</body>
