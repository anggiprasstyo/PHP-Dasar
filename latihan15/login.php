<?php 
require 'functions.php';

	if (isset($_POST["login"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];

		$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

		// cek username
		if (mysqli_num_rows($result)===1)  {
			// cek password
			$row = mysqli_fetch_assoc($result);
			if (password_verify($password, $row["password"])){
				header("Location: index.php");
				exit;

			}

		}

		$error = true;

	}


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<?php if (isset($error)) : ?>
			<!-- <p style="color: red; font-style: italic;">username/password salah</p> -->
		<?php	echo"<script>
				alert('username/password salah !!');
				</script>"; ?>

		<?php endif; ?>


	<div class="form-style-5">
		<form action="" method="post">
			<fieldset>
			<legend><span class="number">1</span>Halaman Login</legend>
				<table>
					<tr>
						<td><label for="username">Username</label></td>
						<td>:</td>
						<td><input type="text" name="username" id="username"></td>
					</tr>
					<tr>
						<td><label for="password">Password</label></td>
						<td>:</td>
						<td><input type="password" name="password" id="password"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><button type="submit" name="login">Login</button></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</body>
</html>