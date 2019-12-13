<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>revision helpers</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>science revision yes</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>leave</a>
				<a href="toptips/index.php"><i class=""></i>admin revision</a>
			</div>
		</nav>
		<div class="content">
			<h2>revision page</h2>
			<p>its revision time, <?=$_SESSION['name']?>!</p>
			<p>vote for new revision: https://www.strawpoll.me/19072447</p>
            <p><a href="/extreme">bloons super monkey</a></p>
            <p><a href="/macbeth">run 2</a></p>
            <p><a href="/mad">bubble tanks 3 (idk if it works)</a></p>
            <p><a href="/nice">btd 4 expansion</a></p>
            <p><a href="/no">learn 2 fly (popular choice)</a></p>
            <p><a href="/sauce">btd 4 classic</a></p>
            <p><a href="/sure">crush the castle 2</a></p>
            <p><a href="/veryinsane">impossible quiz</a></p>
            <p><a href="/yes">bubble tanks 2</a></p>
            <p><a href="/sch3">sch3</a></p>
            <p><a href="/aerodynamics">aerodynamics</a></p>
            <p><a href="/coollmao">btd 5 (working i hope)</a></p>
            <p><a href="/btdb">btd battles</a></p>
            <p><a href="/valor">more admin only revision</a></p>
		</div>
	</body>
</html>