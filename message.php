<?php
	require_once './libs/common.php';
	require_once './libs/models/Post.php';
		
		if(isset($_POST['add-message'])){
			$post = new Post(NULL,$_POST["username"], $_POST["title"], $_POST["message"],NULL);
			$post->addPost();
			header("Location: index.php");
		}	
		if (isset($_GET["remove-message"])) {
			$poistettava = Post::removePost($_GET["remove-message"]);
			$_SESSION['ilmoitus'] = "Viesti poistettiin onnistuneesti!";
			header("Location: admin.php");
			exit();
		}
?>
