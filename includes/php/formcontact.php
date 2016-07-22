<div class="modal fade" id="myModal">
  <div class="modal-dialog">

    <div class="alert alert-success alert-block fade in" id="successAlertSend">
      <button type="button" class="close" data-dismiss="alert">
        &times;
      </button>
      <h4>Félicitation,</h4>
      <p>
        Votre message a bien été envoyé.
      </p>
    </div>

    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title">Contactez-nous !</h3>
      </div>
      <div class="modal-body">
        <h4>Texte</h4>

        <small><p>
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
          eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </p></small>

        <h4>Texte</h4>

        <small><a href="#" data-original-title="Super lien vide..." rel="tooltip">
          Voici un lien</a> et au cas où, en voici
        <a href="#" data-original-title="Zzzbbrra !" rel="tooltip">un autre !</a></small>

        <hr>

        <p>
          <small class="text-muted">Avant je n'étais pas sure, maintenent je suis fixé. <br> Jésus de Nazareth, 7/04/30</small>
        </p>

        <hr>

        <form class="form-horizontal">

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputName">Nom</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputName" placeholder="Nom" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputFirstname">Prénom</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputFirstname" placeholder="Prénom" type="text">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputEmail">Email</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEmail" placeholder="Email" type="email">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-2 control-label" for="inputMessage">Message</label>
            <div class="col-lg-10">
              <textarea class="form-control" id="inputMessage"
              placeholder="Message" rows="3"></textarea>
              <button class="btn btn-success pull-right" type="submit" id="alertSend">Envoyer !</button>
            </div>
          </div>

        </form>

        <div class="modal-footer">
          <button class="btn btn-default" data-dismiss="modal" type="button">
            Fermer
          </button>

          <button class="btn btn-primary" type="button">
            Sauvegarder
          </button>

        </div>



      </div>
    </div>
  </div>
</div>
