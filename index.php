<!DOCTYPE html>
<html>
<head>
	<title>WebChat</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="main">
		<div id="info">
			<h2>Login here</h2>

			<form action="login.php" method="post">
				<label><b>Username</b></label>
				<input type="text" name="uname" placeholder="User name"><br><br>
				<label><b>Password</b></label>
				<input type="password" name="pass" placeholder="Password">
				<button style="background-color: #6495ed;color: white;" type="submit"><b>Login</b></button>
			</form>

			<form action="signup.php" method="post">
                <h2>If you don't have an account signup here</h2>
				<label>Username:</label>
				<input type="text" name="uname" placeholder="Username"><br><br>
				<label>Email ID:</label>
				<input type="text" name="Email" placeholder="Email ID"><br><br>
				<label>Password:</label>
				<input type="password" name="Password" placeholder="Password"><br><br>
				<button style="background-color: #6495ed;color: white;" type="submit"><b>Signup</b></button>

			</form>
			


		</div>
		


	</div>

</body>
</html>