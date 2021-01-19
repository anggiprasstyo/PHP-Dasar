<?php 

require 'functions.php';

//ambil data diURL
$npm = $_GET['npm'];

//query data mahasiswa berdasarkan npm
$mhs = query("SELECT * FROM mahasiswa WHERE npm = $npm")[0];


	//cek apakah tombol submit sudah ditekan atau belum
	if (isset($_POST["submit"])) {

		if (ubah($_POST) > 0){
			echo "
				<script>
					alert('data berhasil diubah!');
					document.location.href = 'index.php';
				</script>
			";
		}else{
			echo "<script>
					alert('data gagal diubah!');
					document.location.href = 'index.php';
				</script>";
		}

	}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Ubah Data Mahasiswa</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="form-style-5">
		<form action="" method="POST" enctype="multipart/form-data">
			<fieldset>
				<legend><span class="number">1</span>Ubah Data Mahasiswa</legend>
				<table>
						<input type="hidden" name="npm" id="npm" required value="<?= $mhs["npm"];?>">
						<input type="hidden" name="gambarLama"value="<?= $mhs["gambar"];?>">
					<tr>
						<td><label for="nama">Nama </label></td>
						<td>:</td>
						<td><input type="text" name="nama" id="nama" value="<?= $mhs["nama"];?>"></td>
					</tr>
					<tr>
						<td><label for="email">Email </label></td>
						<td>:</td>
						<td><input type="email" name="email" id="email" value="<?= $mhs["email"];?>"></td>
					</tr>
					<tr>
						<td><label for="jurusan">Jurusan </label></td>
						<td>:</td>
						<td><input type="text" name="jurusan" id="jurusan" value="<?= $mhs["jurusan"];?>"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><img src="img/<?=$mhs['gambar']; ?>" width="50"></td>
					</tr>
					<tr>
						<td><label for="gambar">Gambar </label></td>
						<td>:</td>
						<td><input type="file" name="gambar" id="gambar"></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td><button type="submit" name="submit">Ubah Data</button></td>
					</tr>
				</table>
			</fieldset>
		</form>
	</div>
</body>
</html>