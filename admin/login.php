<?php include '../classes/Adminlogin.php' ?>
<?php 
$al = new Adminlogin();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $adminUser = $_POST['adminUser'];
    $adminPass = md5($_POST['adminPass']);

    $loginChk= $al->adminLogin($adminUser, $adminPass);
}


 ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="" method="post">
			<h1>Admin Login</h1>
			<span style="color:red; font-size:18px;">
				<?php 
                if (isset($loginChk)) {
                    echo $loginChk;
                }
                ?>
			</span>
			<div>
				<input type="text" placeholder="Username" name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password" name="adminPass"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<img src="img/logo-website.png" width="200"/>
		<div class="button">
			<a href="#">Kasthamandap</a>
			<p>Buy Gift From Us</p>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
