<?php include ('doc/db.php');
session_start();
if (isset($_POST['login']) && !empty($_POST['username']) 
               && !empty($_POST['password'])) {

	$username = trim($_POST['username']);
	$password = trim($_POST['password']);


	$sql = "SELECT * FROM users where username = '$username' && password ='$password'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $_SESSION["login"] = $row['username'];
	header("Location: index.php");
	
  }
} else {
	header("Location: login.php");
}
$conn->close();

			   }


?>


<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Roboto360 - Admin</title>
<link href="assets/libs/css/login.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="main-section">
		<div class="content-section">
		<div class="container-fluid">
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 logbox">
				<div class="head-section">
				<h3>Login</h3>
			</div>
			<div class="body-section">
				<form method="POST" name="log" action="login.php">
					<div class="form-input">
						<input type="text" name="username" id="username" class="form-control" placeholder="Username">
					</div>
					<div class="form-input">
						<input type="password" name="password" id="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-input">	
						<button type="submit" name="login" class="btn btn-primary form-control">Login</button>
					</div>
				</form>
			</div>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
			</div>
		</div>
	</div>
</body>
</html>