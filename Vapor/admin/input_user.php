<?php
include"koneksi.php";
?>

<html>
	<body>

	<form action='save_user.php'method='POST' enctype="multipart/form-data">
	<table>
	<tr><td>Username </td><td>:</td><td><input type=text name='username'> </td>
	<tr><td>Password </td><td>:</td><td><input type=password name='password'> </td>
	<tr><td><input type=submit value='simpan'></td>

	
	
	</form>
	</body>
</html>
<? } ?>