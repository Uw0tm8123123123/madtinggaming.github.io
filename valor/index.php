<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit();
}

if($_SESSION["role"]=="admin"){
  header('Location: sickone.html');
} else if ($_SESSION["role"]=="owner") {
    header('Location: sickone.html');
} else {
    echo('no');
}

?>