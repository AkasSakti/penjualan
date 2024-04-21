<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="style.css" />
</head>
<body>
	<?php 
	if(isset($_POST['pesan'])){
		if($_POST['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
<table align="center">
	<th align="center">Sign In</th>
<form action="cek_login.php" method="post" name="login">
<tr>
	<td><input type="text" name="username" placeholder="Username" required /></td>
</tr>
<tr>
	<td><input type="password" name="password" placeholder="Password" required /></td></tr>
<tr>
	<td><input name="submit" type="submit" value="Login" /><input name="reset" type="reset" value="Reset" /></td>
</tr>
</form>
	<tr><td>Not registered? <a href='registrasi.php'>Register Here</a></td></tr>
</div>
</body>
</html>
