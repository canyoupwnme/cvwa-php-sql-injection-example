<!---	
	Project created by: Canyoupwn.me
	
--> 
<?php 

$baglan = @mysql_connect('localhost','root','123456')or print_r(mysql_error());

$veritabani = @mysql_select_db('cypmsqli') or print_r(mysql_error());
?>
<html>
<head>
<title>CYPM Level 6 </title>
<style>
h2 {
    visibility: hidden;
} 

</style>

</head>
<body>
<center>
<form action="index.php" method="POST">
<b>Get user info :</b><br>
Username :  <input type="text" name="username"></input><br><br>
<input type="Submit" value="Login"></input>
</form>
<?php 
$username = $_POST['username'];


$query = 'SELECT * from users where username=("'.$username.'") LIMIT 0,1';

$sonuc = mysql_query($query);

$result = mysql_fetch_array($sonuc);
if($result){
	
	echo '<font color="#FFFFFF"><b>Password : </b>'.$result["password"].'</font><br><br>';
	echo '<font color="#FFFFFF"><b>Username :</b>'.$result["username"].'</font><br><br>';
	echo 'Force be with you bro. ';

}else{
	print_r(mysql_error()); 
}
?>
<h2>

 $$$$$$\   $$$$$$\  $$\   $$\ $$\     $$\  $$$$$$\  $$\   $$\ $$$$$$$\  $$\      $$\ $$\   $$\ 
$$  __$$\ $$  __$$\ $$$\  $$ |\$$\   $$  |$$  __$$\ $$ |  $$ |$$  __$$\ $$ | $\  $$ |$$$\  $$ |
$$ /  \__|$$ /  $$ |$$$$\ $$ | \$$\ $$  / $$ /  $$ |$$ |  $$ |$$ |  $$ |$$ |$$$\ $$ |$$$$\ $$ |
$$ |      $$$$$$$$ |$$ $$\$$ |  \$$$$  /  $$ |  $$ |$$ |  $$ |$$$$$$$  |$$ $$ $$\$$ |$$ $$\$$ |
$$ |      $$  __$$ |$$ \$$$$ |   \$$  /   $$ |  $$ |$$ |  $$ |$$  ____/ $$$$  _$$$$ |$$ \$$$$ |
$$ |  $$\ $$ |  $$ |$$ |\$$$ |    $$ |    $$ |  $$ |$$ |  $$ |$$ |      $$$  / \$$$ |$$ |\$$$ |
\$$$$$$  |$$ |  $$ |$$ | \$$ |    $$ |     $$$$$$  |\$$$$$$  |$$ |      $$  /   \$$ |$$ | \$$ |
 \______/ \__|  \__|\__|  \__|    \__|     \______/  \______/ \__|      \__/     \__|\__|  \__|

</h2>


<h2>Do you want easter egg ? Okey.Lets see it privatemessages in database </h2>



</center>
</body>
