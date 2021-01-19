<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}

require 'functions.php';
	//cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {



		if (tambah($_POST) > 0){
			echo "
				<script>
					alert('data berhasil ditambahkan!');
					document.location.href = 'index.php';
				</script>
			";
		}else{
			echo "<script>
					alert('data gagal ditambahkan!');
					document.location.href = 'index.php';
				</script>";
		}

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data Mahasiswa</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-style-5">
		<form action="" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend><span class="number">1</span>Data Mahasiswa</legend>
				<table>
					<tr>
						<td><label for="npm">NPM </label></td>
						<td>:</td>
						<td><input type="text" name="npm" id="npm" required></td>
					</tr>
					<tr>
						<td><label for="nama">Nama </label></td>
						<td>:</td>
						<td><input type="text" name="nama" id="nama"></td>
					</tr>
					<tr>
						<td><label for="email">Email </label></td>
						<td>:</td>
						<td><input type="email" name="email" id="email"></td>
					</tr>
					<tr>
						<td><label for="jurusan">Jurusan </label></td>
						<td>:</td>
						<td><input type="text" name="jurusan" id="jurusan"></td>
					</tr>
					<tr>
						<td><label for="gambar">Gambar </label></td>
						<td>:</td>
						<td><input type="file" name="gambar" id="gambar"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><button type="submit" name="submit">Tambah Data</button></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</body>
</html>