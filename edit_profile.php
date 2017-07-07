<?php
$current = 5;
require('header.php');
$id = $_GET['user_id'];
if(!empty($_POST)){
	$no_hp = $_POST['no_hp'];asdasdasdasdas
	// var_dump($_FILES);
	if($_FILES["foto"]["tmp_name"] != ""){
		$target_dir = "img/foto/";
		$target_file = $target_dir . basename($_FILES["foto"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
		$tempat_foto = $target_dir . "profile_" . $id . "." .$imageFileType;
		// Check if image file is a actual image or fake image
		$uploadOk = 1;
	    $check = getimagesize($_FILES["foto"]["tmp_name"]);
		if($check !== false) {
		    $uploadOk = 1;
		} else {
		    $uploadOk = 0;
		}
		if($uploadOk == 1){
			if (move_uploaded_file($_FILES["foto"]["tmp_name"], $tempat_foto)) {
		        $sql = "UPDATE `biodata` SET `no_hp`='$no_hp',`url_foto`='$tempat_foto' WHERE `id_user`='$id'";
				$result = $conn->query($sql);
		    }
		}
	}else{
		$sql = "UPDATE `biodata` SET `no_hp`='$no_hp' WHERE `id_user`='$id'";
		$result = $conn->query($sql);
	}
}
$sql = "SELECT * from `biodata` where `id_user` = '$id'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$exist = file_exists($row['url_foto']);
?>

<section id="edit-profile" style="margin-top: 20px;">
	<div class="container" style="margin:0;padding:0;width: 100%;">
		<div class="col-md-4 col-md-offset-4">	
			<div class="section-title text-center wow fadeInDown" style="width: 100%;">
				<?php
				if(isset($uploadOk)){
					if($uploadOk == 0){ ?>
						<div class="alert alert-danger alert-dismissible" role="alert">
						  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						  <strong>File yang anda upload bukan file image.</strong>
						</div>
					<?php }
				} 
				?>
				<h2>Edit Profile</h1>
				<img src="<?php 
				if($exist) {
					echo $row['url_foto'];
				} else { 
					echo 'img/noimage.jpg'; 
				} ?>" id="user-photo"></div>
				<form action="" method="post" class="form-horizontal forms" enctype="multipart/form-data">
					<div class="form-group text-center">
						<input type="file" name="foto" id="file-1" class="inputfile inputfile-1 text-center" accept="image/*"/>
						<label for="file-1"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Change Profile Picture</span></label>
					</div>
					<div class="form-group">
					    <label for="Nama" class="col-sm-4 control-label">Nama</label>
					    <div class="col-sm-8">
					    	<input type="text" class="form-control" id="Nama" placeholder="" value="<?php if(isset($row['nama'])) { echo $row['nama']; } ?>" disabled>
						</div>
					</div>
					<div class="form-group">
					    <label for="kotaAsal" class="col-sm-4 control-label">Tempat Tinggal</label>
					    <div class="col-sm-8">
					    	<input type="text" class="form-control" id="kotaAsal" placeholder="" value="<?php if(isset($row['kota_asal'])) { echo $row['kota_asal']; } ?>" disabled>
						</div>
					</div>
					<div class="form-group">
					    <label for="kotaLahir" class="col-sm-4 control-label">Kota Lahir</label>
					    <div class="col-sm-8">
					    	<input type="text" class="form-control" id="kotaLahir" placeholder="" value="<?php if(isset($row['kota_lahir'])) { echo $row['kota_lahir']; } ?>" disabled>
						</div>
					</div>
					<div class="form-group">
					    <label for="tanggalLahir" class="col-sm-4 control-label">Tanggal Lahir</label>
					    <div class="col-sm-8">
					    	<input type="date" class="form-control" id="tanggalLahir" placeholder="" value="<?php if(isset($row['tanggal_lahir'])) { echo $row['tanggal_lahir']; } ?>" disabled>
						</div>
					</div>
					<div class="form-group">
					    <label for="no_hp" class="col-sm-4 control-label">Nomor Telp</label>
					    <div class="col-sm-8">
					    	<input type="number" name="no_hp" oninput="checkNumber(this)" class="form-control" id="no_hp" placeholder="" value="<?php if(isset($row['no_hp'])) { echo $row['no_hp']; } ?>">
						</div>
					</div>
					<script>
					function checkNumber () {
					    var x = document.getElementById('phoneNumber');
					    alert(x.value.length);
					    if(x.value.length > 12){
					    	x.value = x.value.slice(0, 12);
					    }
					}
					</script>
					<div class="form-group">
						<div class="col-sm-offset-3 col-sm-6 text-center">
							<button class="btn btn-success" type="submit">Save</button>
							<button class="btn btn-warning" type="reset">Reset</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div> <!-- end .container -->
</section>
<?php
	require('footer.php')
?>