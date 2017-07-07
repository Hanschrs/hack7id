<?php
require('connection.php');
session_start();

	// echo $_POST['username'];
	// echo $_POST['password'];

if(isset($_POST["id_ketua"]) && isset($_POST["nama_room"]) && isset($_POST["destinasi"]) && isset($_POST["tanggal"]) && isset($_POST["kuota"]))
{
		// echo "argh";
	$id_ketua = $_POST["id_ketua"];
	$nama_room = $_POST["nama_room"];
	$destinasi = $_POST["destinasi"];
	$tanggal = $_POST["tanggal"];
	$kuota = $_POST["kuota"];

	$sql = "INSERT INTO `room`(`id_ketua`, `nama_room`, `destinasi`, `tanggal`, `kuota`) VALUES ('$id_ketua','$nama_room','$destinasi','$tanggal','$kuota')";
	$result = $conn->query($sql);
	// $row = $result->fetch_assoc();

	// if (mysqli_num_rows($result) > 0 ) {
		//masukin room disini
		// header('Location: index.php?user_id='.$row['id']);
	$sql = "SELECT `id` FROM `room` WHERE `nama_room` = '$nama_room'";
	$result = $conn->query($sql);
	$row = $result->fetch_assoc();
	if (mysqli_num_rows($result) > 0 ) {
		$id_ruangan = $row['id'];
		echo $id_ruangan;
		// header('Location: chatroom.php?room_id='.$row['id']);
	}
	// echo "aasd";
}else{
	echo "MAAF GAN, GAGAL BIKIN ROOM :v";
}

mysqli_close($conn);
?>
