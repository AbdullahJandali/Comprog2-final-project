<?php 
	session_start();
	// error_reporting(E_ERROR | E_PARSE);

	$username = "";
	$email = "";
	$errors = array();

	//connecting to db
	$db = mysqli_connect('localhost', 'root', 'root', 'registration');

	//register button
	if (isset($_POST['register'])) {
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$email = mysqli_real_escape_string($db, $_POST['email']);
		$password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
		$phone = mysqli_real_escape_string($db, $_POST['phone']);
		$address = mysqli_real_escape_string($db, $_POST['address']);


		//required properties
		if (empty($username)) {
			# code...
			array_push($errors, "Username is required");
		}
		if (empty($email)) {
			# code...
			array_push($errors, "Email is required");
		}
		if (empty($password_1)) {
			# code...
			array_push($errors, "Password is required");
		}
		if (empty($address)) {
			# code...
			array_push($errors, "Address is required");
		}

		if ($password_1 != $password_2) {
			# code...
			array_push($errors, "Passwords did not match");
		}

		//no error, save to db
		if (count($errors) == 0) {
			# code...
			$password = md5($password_1); //encrypt password
			$sql = "INSERT INTO users (username, email, password, phone, address)
					VALUES ('$username', '$email', '$password', '$phone', '$address')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "Logged in";
			header('location: index.php');
		}
	}


	//log user in from login page
	if (isset($_POST['login'])) {
		# code...
		$username = mysqli_real_escape_string($db, $_POST['username']);
		$password = mysqli_real_escape_string($db, $_POST['password']);


		//required properties
		if (empty($username)) {
			# code...
			array_push($errors, "Username is required");
		}
		if (empty($password)) {
			# code...
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			# code...
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 1 ) {
				# code... log user in
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "";
				header('location: index.php');
			} else {
				array_push($errors, "Wrong username/password combination");
				header('location: login.php');
			}
		}
	}


	//logout
	if (isset($_GET['logout'])) {
		# code...
		session_destroy();
		unset($_SESSION['username']);
		header('location: index.php');
	}

?>