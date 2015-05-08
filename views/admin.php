<h1>Vieraskirjan hallinta</h1>

<h3>Kirjoitukset</h3>
	 <?php foreach($pages[$pgkey] as $post) { ?>
      <div class="panel panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title" float:left;><?php echo $post->getTitle(); ?></h3>
            </div>
          <div class="panel-body">
            <p><?php echo $post->getMessage(); ?></p><form method="GET"onsubmit="return confirm('Haluatko varmasti poistaa viestin?')">
      <button type="submit" name="remove-message" value="<?php echo $post->getId(); ?>" class="btn btn-danger" formaction="message.php"  style="float:right">Poista</button>
      </form>
            <p style="color:silver"><sub><i><?php echo $post->getUsername() . " " . GmtTimeToLocalTime($post->getDate()); ?></i></sub></p>
          </div>
        </div>
	<?php } ?>	
	<form method="GET">
		<button type="submit" name="logout" formaction="login.php" class="btn btn-danger">Kirjaudu ulos</button>
	</form>
  <!--Pagination -->
     <nav align="center">
        <ul class="pagination">
          <?php if($pgkey > 0) { ?><li>
            <a href="admin.php?showpage=<?php echo $pgkey-1 ?>" aria-label="Previous">
              <span aria-hidden="true">&laquo;</span>
            </a>
          </li>
          <?php } ?>
          <?php for($i=0; $i< count($pages); $i++): ?>
            <li><a href="admin.php?showpage=<?php echo $i;?>"><?php echo $i+1; ?></a></li>
          <?php endfor; ?>
          <?php if($pgkey < count($pages)-1) { ?>
          <li>
            <a href="admin.php?showpage=<?php echo $pgkey+1 ?>" aria-label="Next">
              <span aria-hidden="true">&raquo;</span>
            </a>
          </li>
          <?php } ?>
        </ul>
      </nav>
