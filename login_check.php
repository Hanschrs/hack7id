<?php
	require('connection.php');
	session_start();

	// echo $_POST['username'];
	// echo $_POST['password'];

	if(isset($_POST["username"]) && isset($_POST["password"]))
	{
		// echo "argh";
		$username = $_POST["username"];
		$password = $_POST["password"];
	}else{
		$username = "";
		$password = "";
	}


	// echo $username;
	// echo $password;
	$sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
	$result = $conn->query($sql);
    $row = $result->fetch_assoc();

	if (mysqli_num_rows($result) > 0 ) {
    	//masuk ke user
    	$_SESSION['user']['name'] = $row['username'];
    	$_SESSION['user']['id'] = $row['id'];
    	// echo "success";
    	// var_dump($row);
    	header('Location: index.php?user_id='.$row['id']);
	}else{
		//login gagal
		echo $username;
		echo $password;
		// echo $row['username'];
		// echo $row['password'];
		echo "<div class='alert alert-danger text-center' role='alert'>username dan password tidak valid <a class='btn btn-danger btn-md' href='index.php'>Kembali</a></div>";
	}

	mysqli_close($conn);
?>
