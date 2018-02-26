<?php
/**********************************************************
* File: signIn.php
* Author: Br. Burton
* 
* Description: This page has a form for the user to sign in.
*
* In this case, to show another approach, we will have this
* page have two purposes, it will have the form for signing
* in, but it will also have the logic to check a username
* and password and redirect the user to the home page if
* everything checks out. Thus it will post to itself.
***********************************************************/

// If you have an earlier version of PHP (earlier than 5.5)
// You need to download and include password.php.
//require("password.php"); // used for password hashing.

include "database.php";
session_start();

$badLogin = false;

// First check to see if we have post variables, if not, just
// continue on as always.

if (isset($_POST['txtUser']) && isset($_POST['txtPassword']))
{
	// they have submitted a username and password for us to check
	$username = $_POST['txtUser'];
	$password = $_POST['txtPassword'];

	// Connect to the DB
	// $db = get_db();

	$query = 'SELECT pass FROM users WHERE username=:username';

	$statement = $db->prepare($query);
	$statement->bindValue(':username', $username);

	$result = $statement->execute();

	if ($result)
	{
		$row = $statement->fetch();
		$hashedPasswordFromDB = $row['pass'];

		// now check to see if the hashed password matches
		if (password_verify($password, $hashedPasswordFromDB))
		{
			// password was correct, put the user on the session, and redirect to home
			$_SESSION['username'] = $username;
			header("Location: index.php");
			die(); // we always include a die after redirects.
		}
		else
		{
			$badLogin = true;
		}

	}
	else
	{
		$badLogin = true;
	}
}

// If we get to this point without having redirected, then it means they
// should just see the login form.
?>
<?php include 'quizHeader1.php' ?>
<body>
<div>

<?php
if ($badLogin)
{
	echo "Incorrect username or password!<br /><br />\n";
}
?>
<main>
	<div class="container">
		<h1>Please sign in below:</h1>

		<form id="mainForm" action="signIn.php" method="POST">
			<p>
				<input type="text" id="txtUser" name="txtUser" placeholder="Username">
				<label for="txtUser">Username</label>
			</p>
			<p>
				<input type="password" id="txtPassword" name="txtPassword" placeholder="Password">
				<label for="txtPassword">Password</label>
			</p>
			<input type="submit" value="Sign In" />
		</form>
	</div>
</main>
<footer>
	Or <a href="signUp.php">Sign up</a> for a new account.
</footer>

</body>
</html>