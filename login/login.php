<html>
<head>
<link rel="stylesheet" href="Login-Style.css">
</head>
<body>

<?php
if (!isset($_POST['submit'])){
?>
<!-- The HTML login form -->
<div id="Login-Page">
<a class="active" href="../index.php" class="Home-Button"><div class="Home-Button"></div></a>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
	
	<h2 id="ADMINLOGIN">ADMIN-LOGIN</h2>
		<p id="Usernametitle">Username</p><input type="text" name="username" /><br />
		<p id="Passwordtitle">Password</p><input type="password" name="password" /><br />
        <button type="submit" name="submit" value="Login" id="loginbutton">LOGIN</button>
	</form>
	</div>
<?php
} else {
	require_once("db_const.php");
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
	# check connection
	if ($mysqli->connect_errno) {
		echo "<p>MySQL error no {$mysqli->connect_errno} : {$mysqli->connect_error}</p>";
		exit();
	}
 
	$username = $_POST['username'];
	$password = $_POST['password'];
 
	$sql = "SELECT * from users WHERE username LIKE '{$username}' AND password LIKE '{$password}' LIMIT 1";
	$result = $mysqli->query($sql);
	if (!$result->num_rows == 1) {
		echo "<p>Invalid username/password combination</p>";
	} else {
     echo "<a href='../cms/gallery.php'><img id='Logged-In'src='../images/Ness.png'></a>";
     echo "<h2>Click Me</h2>";
	}
}
?>		
</body>
</html>