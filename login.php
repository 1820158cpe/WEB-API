

<?php




?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
		<style>
		    h1{
		        font-family: "Inconsolata", sans-serif;
		    }
		    h3 {text-align: center;
		        font-family: "Inconsolata", sans-serif;
		    }
		    body {
                	background : url("gadgets-background.jpg");
                	background-size: cover;
                	background-repeat: no-repeat;
                 	background-attachment: fixed;
                	overflow: hidden;
            .login{
                    background-color: rgba(225, 225, 221, 0.5);
            }
            html {
                    font-family: "Inconsolata", sans-serif;
            }
		</style>
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form action="authenticate.php" method="post">
				<label for="username">
					<i class="fas fa-user"></i>
				</label>
				<input type="text" name="username" placeholder="Username" id="username" required>
				<label for="password">
					<i class="fas fa-lock"></i>
				</label>
				<input type="password" name="password" placeholder="Password" id="password" required>
				<input type="submit" value="Login">
				
			</form>
		<div class="reg">
		    <h3>Not yet registered? <br></h3>
		    <h3><a href="register.html">Click here to register!</a></h3>
		</div>
		</div>
	</body>
</html>