<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Index</title>
</head>

<body>
  <fieldset>
	<legend>LOGIN</legend>
		<form action="login.php" method="post">
			<label for="user">Gebruikersnaam:</label>
				<input type="text" name="user" placeholder="Gebruikersnaam..." required><br>
			<label for="pass">Wachtwoord:</label>
				<input type="password" name="pass" placeholder="Wachtwoord..." required><br>
			<button type="submit" name="submit">Login</button>

            <p>Trial account: <br>

            Gebruikersnaam: trial <br>
            Password: trial</p>
		</form>
  </fieldset>
</body>
</html>