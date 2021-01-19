 <?php 
 //koneksi database
 	$conn = mysqli_connect("localhost","root","","phpdasar");
  
 	function query($query){
 		global $conn;
 		$result = mysqli_query($conn, $query);
 		$rows = [];
 		while( $row = mysqli_fetch_assoc($result) ) {
 			$rows[] = $row;
 		}
 		return $rows;
 	}

 	function tambah($data){
 		global $conn;

		$npm = htmlspecialchars($data["npm"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambar = htmlspecialchars($data["gambar"]);

		$query = "INSERT INTO mahasiswa VALUES ('$npm','$nama','$email','$jurusan','$gambar')";
		mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
 	}

 	function hapus($npm){
 		global $conn;
 		mysqli_query($conn, "DELETE FROM mahasiswa WHERE npm = $npm");
 		return mysqli_affected_rows($conn);
 	}

 	function ubah($data){
	global $conn;

		$npm = htmlspecialchars($data["npm"]);
		$nama = htmlspecialchars($data["nama"]);
		$email = htmlspecialchars($data["email"]);
		$jurusan = htmlspecialchars($data["jurusan"]);
		$gambar = htmlspecialchars($data["gambar"]);

		$query = "UPDATE mahasiswa SET npm = '$npm', nama = '$nama', email = '$email', jurusan = '$jurusan', gambar = '$gambar' WHERE npm = $npm ";
		mysqli_query($conn,$query);

		return mysqli_affected_rows($conn);
 	}

 	function cari($keyword){
 		$query = "SELECT * FROM mahasiswa WHERE npm LIKE '%$keyword%' OR nama LIKE '%$keyword%' OR email LIKE '%$keyword%' OR jurusan LIKE '%$keyword%' ";
 		return query($query);
 	}

  ?>