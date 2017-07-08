<?php
require('../connection.php');

if (isset($_POST['register'])) {
	# code...
	// echo "reg";

	session_start();


}
elseif (isset($_POST['login'])) {
	# code...
	echo "login";
}
elseif (isset($_POST['edit'])) {
	# code...
	echo "edit";
}
elseif (isset($_POST['delete'])) {
	# code...
	echo "delete";
}

die();


if(isset($_POST["username"]) && isset($_POST["password"]) && isset($_POST["nama"]) && isset($_POST["email"]) && isset($_POST["tanggal_lahir"]))
{
		// echo "argh";
	$username = $_POST["username"];
	$password = $_POST["password"];
	$nama = $_POST["nama"];
	$kota_asal = $_POST["kota_asal"];
	$kota_lahir = $_POST["kota_lahir"];
	$tanggal_lahir = $_POST["tanggal_lahir"];
	$no_hp = $_POST["no_hp"];

	$sql = "INSERT INTO `user`(`username`, `password`, `role`) VALUES ('$username', '$password')";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();

	if (mysqli_num_rows($result) > 0 ) {
		$sql = "INSERT INTO `biodata`(`nama`, `kota_asal`, `kota_lahir`, `tanggal_lahir`, `no_hp`) VALUES ('$nama','$kota_asal','$kota_lahir','$tanggal_lahir','$no_hp')";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();

		if (mysqli_num_rows($result) > 0 ) {
    		//masuk ke user
			$_SESSION["user"] = $row['nama'];
    		// echo "success";
			header('Location: index.php?user_id='.$row['id']);
		}

	}
}else{
	echo "MAAF GAN, GAGAL REGISTRASI :v";
}

mysqli_close($conn);
?>
