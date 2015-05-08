<?php
	require_once './libs/common.php';
	require_once "./libs/models/User.php";

	if (isset($_GET["logout"])) {
		unset($_SESSION["kirjautunut"]);
		header('Location: index.php');
	}
	if (!isset($_POST["submit"])) {
		naytaNakyma('loginform.php');
	}
	$tunnus = $_POST["tunnus"];
	$salasana = $_POST["salasana"];

	/* Tarkistetaan onko parametrina saatu oikeat tunnukset */
	$kayttaja = User::getUser($tunnus, $salasana);

	if (isset($kayttaja)) {
		$_SESSION['kirjautunut'] = $kayttaja->getId();
		header('Location: ./admin.php');
	} else {

		$_SESSION['virhe'] = "Kirjautuminen epäonnistui";
				naytaNakyma("loginform.php");
	}
?>
