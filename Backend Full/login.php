<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
   header('location: index1.php');
}
?>
<!DOCTYPE html>
<title>Login</title>
 <link href="index.css"rel="stylesheet" type="text/css"/> 
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style>
  </style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-md-offset-4"> 
			<div class="panel panel-primary">
			<div class="panel-heading">
			<form method="POST" action="login_submit.php">
			<h3>Student Login</h3>
			</div>
			<p class="text-warning">Student Login</p>
			<div class="panel-body">
			<input type="email" name="email" class="form-control" placeholder="Email"align="center"><br>
			<input type="password" name="password" class="form-control" placeholder="Password" align="center"><br>
			<button class="btn btn-primary">Login</button><br><br>
			</div>
		</form>
<?php
if (isset($_POST['email'])) {
$email = $_POST['email'];
}
if (isset($_POST['password'])) {
$password = $_POST['password'];
}
?>

	<div class="panel-footer">Don't have an accunt?<a href="signup.php">Register</a></div>
</div>			
</div>
</div>
</div>
<div style="text-align:center; margin-top:10px;">
				<ins class="adsbygoogle"
style="display:block"
data-ad-client="ca-pub-8011246932591811"
data-ad-slot="9844648019"
data-ad-format="auto"></ins> <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				</div>
	<div class="footer" align="center">
		<p>You are logging into in Raeces official site <a href="https://www.raeces.org/" target="_blank">©️RAECES2019</a> </p>
	</div>

</body>
</html>