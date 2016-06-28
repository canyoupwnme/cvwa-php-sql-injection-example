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
<?php 

$baglan = @mysql_connect('localhost','root','123456')or die("Not connected MYSQL");
$veritabani = @mysql_select_db('cypmsqli') or die("Not connected database");

?>
<html>
<head>
<title>CYPM Level 3</title>
</head>
<body>
<center>
<form action="index.php" method="GET">
<b>Get user info :</b><br>
Username :  <input type="text" name="username"></input><br><br>
<input type="Submit" value="Login"></input>
</form>
<?php 
$username = $_GET['username'];


$query = "SELECT * from users where username='$username'";
$query = str_replace("or", "or'", $query);
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
