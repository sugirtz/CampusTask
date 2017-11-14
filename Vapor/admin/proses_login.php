<?php
	$link = mysqli_connect("localhost","root","","new_bio");
	$pass=md5($_POST[password]);
	$login=mysqli_query($link,"SELECT * FROM user WHERE username='$_POST[username]' AND password='$pass'");
	$ketemu=mysqli_num_rows($login);
	$r=mysqli_fetch_array($login,MYSQLI_ASSOC);
	if($ketemu > 0)
	{
	session_start();
		$_SESSION[username] = $r[username];
		$_SESSION[password] = $r[password];
		$_SESSION[nama] = $r[nama];
	
	header('location:home.php');
	}
		else
	{
		echo"
		<html>
			<body>
				Login Anda Gagal!
				<a href='index.php'>Ulangi Login</a>
			</body>
		</html>
		";
	}
?>