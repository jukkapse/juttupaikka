      <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="">Viestit</a></li>
        <li role="presentation"><a href="./messages.php">Kirjoita</a></li>
        <li role="presentation"><a href="./login.php">Admin</a></li>
      </ul>
      <center><a href="http://www.rastikarhut.fi/"><img src="./img/juttupaikka.png" alt="juttupaikka" width="40%"></a></center>
      <?php foreach($pages[$pgkey] as $post) { ?>
        <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title"><?php echo $post->getTitle(); ?></h3>
            </div>
          <div class="panel-body">
            <?php echo $post->getMessage(); ?>
            <p style="color:silver"><sub><i><?php echo $post->getUsername() . " " . GmtTimeToLocalTime($post->getDate()); ?></i></sub></p>
          </div>
        </div>
      <?php } ?>
      <!--Pagination -->
     <nav align="center">
        <ul class="pagination">
          <?php if($pgkey > 0) { ?><li>
            <a href="index.php?showpage=<?php echo $pgkey-1 ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <?php } ?>
          <?php for($i=0; $i< count($pages); $i++): ?>
            <li><a href="index.php?showpage=<?php echo $i;?>"><?php echo $i+1; ?></a></li>
          <?php endfor; ?>
          <?php if($pgkey < count($pages)-1) { ?>
          <li>
            <a href="index.php?showpage=<?php echo $pgkey+1 ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>