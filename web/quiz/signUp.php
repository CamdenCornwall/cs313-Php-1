<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
/**********************************************************
* File: singup.php
* Author: Br. Burton
* 
* Description: Allows a user to enter a new username
*   and password to add to the DB.
*
* It posts to a file called "createAccount.php"
*   which does the actual creation.
*
***********************************************************/
?>
<?php include 'quizHeader1.php' ?>
<body>
<div class="container"style="
    padding-left: 80px;
">
	<h1>Enter your student info:</h1>
</div>
<main style="
    padding-left: 50px;
    margin-left: 100px;"
>
	<div class="containerSmall">
		<p>create your username with your first name and your last name. </br>Together with no spaces. (eg: Juan Ramirez, juanramirez)</p>
		<form id="mainForm" action="createAccount.php" method="POST">

		<p >
			<label for="txtUser">Username</label>
			<input type="text" id="txtUser" name="txtUser" size="5" placeholder="juanRamirez">
		</p>
		<p>
			<label for="txtPassword">Password</label>
			<input type="password" id="txtPassword" name="txtPassword" placeholder="Password"></input>
		</p>
		<p>
			<input type="submit" value="Create Account" />
		</p>
		</form>
		or <a href="signIn.php">Sign in</a> with an existing account.
	</div>
</main>
<footer>
	<i>Sign Up page</i>
</footer>
</body>
</html>