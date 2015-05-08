<ul class="nav nav-tabs">
        <li role="presentation"><a href="./index.php">Viestit</a></li>
        <li role="presentation" class="active"><a href="">Kirjoita</a></li>
        <li role="presentation"><a href="./login.php">Admin</a></li>
      </ul>
      <div class="col-md-offset-2 col-md-10">
<h3>Kirjoita viesti</h3>
</div>
    <form class="form-horizontal" role="form" action="message.php" method="POST">
        <div class="form-group">
            <label for="username" class="col-md-2 control-label">Nimimerkki:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="username" placeholder="Nimimerkki" required>
            </div>
        </div>
        <div class="form-group">
            <label for="title" class="col-md-2 control-label">Otsikko:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="title" placeholder="Viestin otsikko">
            </div>
        </div>
		 <div class="form-group">
            <label for="message" class="col-md-2 control-label">Viesti:</label>
            <div class="col-md-7">
                <textarea class="form-control" rows="4" name="message" id="ckeditor" placeholder="Kirjoita viestisi tähän.."></textarea>
                 <script>

                CKEDITOR.replace( 'ckeditor', {
                    filebrowserImageUploadUrl: './ckeditor/plugins/imgupload/imgupload.php',
                } );
                </script>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button name="add-message" type="submit" class="btn btn-success">Lisää viesti</button>
				</div>
        </div>
    </form>
