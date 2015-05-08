	<ul class="nav nav-tabs">
        <li role="presentation"><a href="./index.php">Viestit</a></li>
        <li role="presentation"><a href="./messages.php">Kirjoita</a></li>
        <li role="presentation" class="active"><a href="">Admin</a></li>
      </ul>
      <div class="col-md-offset-2 col-md-10">
    <h3>Kirjaudu sisään</h3>
    </div>
    <form class="form-horizontal" role="form" action="login.php" method="POST">
        <div class="form-group">
            <label for="tunnus" class="col-md-2 control-label">Käyttäjätunnus:</label>
            <div class="col-md-3">
                <input type="text" class="form-control" name="tunnus" placeholder="Käyttäjätunnus" required>
            </div>
        </div>
        <div class="form-group">
            <label for="salasana" class="col-md-2 control-label">Salasana:</label>
            <div class="col-md-3">
                <input type="password" class="form-control" id="inputPassword" name="salasana" placeholder="Salasana" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button name="submit" type="submit" class="btn btn-default">Kirjaudu sisään</button>
            </div>
        </div>
    </form>
