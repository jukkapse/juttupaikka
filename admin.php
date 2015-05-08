<?php
	require_once './libs/common.php';

	if (isset($_SESSION['kirjautunut'])) {
		if(isset($_POST['edit'])){
		header("Location: index.php");
		exit();
	}
		naytaNakyma('admin.php');
	}
?>
