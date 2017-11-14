<?php
$link = mysqli_connect("localhost","root","","new_bio");
$cari=mysqli_query($link,"SELECT * FROM users WHERE username='$_POST[username]'");
$ketemu=mysqli_num_rows($cari);
$sr=mysqli_fetch_array($cari,MYSQLI_ASSOC);
if ($ketemu > 0)
{
	echo "
	<script language='javascript' type='text/javascript'>
	alert('Data dengan user $_POST[username] sudah terdaftar.');
	</script>
	<meta http-equiv='refresh' content='0; url=input_user.php'>";
}
else
{
$pass=md5($_POST['password']);

mysqli_query ($link,"
INSERT INTO user(username,password) 
VALUES('$_POST[username]','$pass')");
header('location:index.php');
	
}
?> 