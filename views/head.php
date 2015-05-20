<!DOCTYPE html>
<html>
  <?php 
    require_once "./libs/common.php";
    require_once "./libs/models/Post.php";
    $posts = Post::getPosts();
    if(count($posts)>0){
    $pagedPosts = array();
      foreach($posts as $post){
        if(strpos($f,'.')!==0){
          array_push($pagedPosts,$post);
        }
      }
    $pages = array_chunk($pagedPosts, 20);
    $pgkey = (int)$_GET['showpage'];
    $pages[$pgkey];      
    }
  ?>
  <head>
    <title>Juttupaikka</title>
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <script src="./ckeditor/ckeditor.js"></script>
        <script> CKEDITOR.env.isCompatible = true; </script>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <link rel="shortcut icon" href="./img/rastikarhut.ico"  type="image/x-icon" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body>
    <div class="container">
      <?php if (!empty($_SESSION['ilmoitus'])): ?>
        <div class="alert alert-success">
          <?php echo $_SESSION['ilmoitus']; ?>
        </div>
        <?php unset($_SESSION['ilmoitus']);
      endif; ?>
            <?php if (!empty($_SESSION['virhe'])): ?>
        <div class="alert alert-danger">
          <?php echo $_SESSION['virhe']; ?>
        </div>
        <?php unset($_SESSION['virhe']);
      endif; ?>
 
