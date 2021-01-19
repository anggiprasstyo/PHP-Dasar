<?php 
require 'functions.php';

	if (isset($_POST["register"])) {
		if (registrasi($_POST)>0) {
			echo"<script>
				alert('user baru berhasil ditambahkan');
				</script>";
		}else{
			echo mysqli_error($conn);
		}
	}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Registrasi</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-style-5">

		<form action="" method="post">
			<fieldset>
				<legend><span class="number">1</span>Ubah Data Mahasiswa</legend>
					<table>
						<tr>
							<td><label for="username">Username</label></td>
							<td>:</td>
							<td><input type="text" name="username" id="username" required></td>
						</tr>
						<tr>
							<td><label for="password">Password</label></td>
							<td>:</td>
							<td><input type="password" name="password" id="password" required ></td>
						</tr>
						<tr>
							<td><label for="password2">Konfirmasi password</label></td>
							<td>:</td>
							<td><input type="Password" name="password2" id="password2" required ></td>
						</tr>
							<td></td>
							<td></td>
							<td><button type="submit" name="register">Register!</button></td>
					</table>
			</fieldset>
		</form>
	</div>
</body>
</html>