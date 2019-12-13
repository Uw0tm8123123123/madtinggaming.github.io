<?php

session_start();

if (!isset($_SESSION['loggedin'])) {
	header('Location: ../index.html');
	exit();
}

if($_SESSION["role"]=="admin"){
  header('Location: actualthing.html');
} else if ($_SESSION["role"]=="owner") {
    header('Location: actualthing.html');
} else {
  echo "no";
}
?>