<?php 
include '../lib/Sesssion.php';
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
		<form action="" method="post">
			<h1>Admin Login</h1>
			<div>
				<input type="text" placeholder="Username" required="" name="username"/>
			</div>
			<div>
				<input type="password" placeholder="Password" required="" name="password"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
		 <a href="">Your website home page link</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>