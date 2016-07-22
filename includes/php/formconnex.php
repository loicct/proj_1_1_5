<div class="modal fade" id="myModalconnex">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Connectez-vous !</h3>
      </div>
      <div class="modal-body">

        <script src="/includes/js/confmdp.js"></script>

        <form class="form-horizontal" action="/includes/bdd/connexionmembres.php"
        method="post" onsubmit="return verify2(this.sLogin, this.sPass)">

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputLogin" type="text">Identifiant</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputLogin" placeholder="Login" name="sLogin" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputPassco">Mot de Passe</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputPassco" placeholder="Mot de Passe" name="sPass" type="password">

            </div>
          </div>

          <button class="btn btn-success pull-right" type="submit" id="connexion">Connexion</button>

        </form>



      </div>
    </div>
  </div>
</div>
