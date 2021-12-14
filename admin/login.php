<?php 
include '../lib/Session.php';
Session::init();
?>

<?php 
 include '../lib/Database.php';
 include '../config/config.php';
 include '../helpers/Format.php';
?>
<!-- I am creating objects here so that i can access it from any page, becuase header is includeded in every page -->
<?php
$db = new Database();
$fm = new Format();
?>


<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
 <?php
 if(isset($_POST['login'])){
	$username = $_POST['username'];
	$password = $_POST['password'];
	$username = mysqli_real_escape_string($db->link, $username);
	$password = mysqli_real_escape_string($db->link, $password);

	$query = "SELECT id, username FROM tbl_user WHERE username = '$username' AND password = '$password'";

	$result = $db->select($query);

 	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
		 
		 $_SESSION["username"] = $row["username"];
		 $_SESSION["userId"] = $row["id"];
		 header("Location:index.php");
	  }
	} else{
		echo "<span style='color:red; font-size:17px; font-weight:bold'>Username or Password Dosen't match</span>";
	}
 }
 ?>
 
 <form action="login.php" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username"  name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="password"/>
			</div>
			<div>
				<input type="submit" value="Login" name="login"/>
			</div>
		</form><!-- form -->
		<div class="button">
		 <a href="">Your website home page link</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>