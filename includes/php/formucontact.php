<?php
  session_start();
?>


<div class="modal fade" id="myModal">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button class="close" data-dismiss="modal">&times;</button>
        <h3 class="modal-title" id="contacttitre">Contactez-nous !</h3>
      </div>
      <div class="modal-body">

        <!-- CONTENT -->
        <div class="container">
          <?php if(array_key_exists('errors',$_SESSION)): ?>
          <div class="alert alert-danger">
            <?= implode('<br>', $_SESSION['errors']); ?>
          </div>
          <?php endif; ?>
          <?php if(array_key_exists('success',$_SESSION)): ?>
          <div class="alert alert-success">
            Votre email à bien été transmis !
          </div>
          <?php endif; ?>
          <form action="send_form.php" method="post" id="formcont">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputname" id="contacttitre">Votre nom</label>
                  <input required type="text" name="name" placeholder="Nom" class="form-control" id="inputname" value="<?php echo isset($_SESSION['inputs']['name'])? $_SESSION['inputs']['name'] : ''; ?>">
                </div><!--/*.form-group-->
              </div><!--/*.col-md-6-->
              <div class="col-md-6">
                <div class="form-group">
                  <label for="inputemail" id="contacttitre">Votre email</label>
                  <input required type="email" name="email" placeholder="E-mail" class="form-control" id="inputemail" value="<?php echo isset($_SESSION['inputs']['email'])? $_SESSION['inputs']['email'] : ''; ?>">
                </div><!--/*.form-group-->
              </div><!--/*.col-md-6-->
              <div class="col-md-12">
                <div class="form-group">
                  <label for="inputmessage" id="contacttitre">Votre message</label>
                  <textarea required id="inputmessage" name="message" placeholder="Votre message..." class="form-control"><?php echo isset($_SESSION['inputs']['message'])? $_SESSION['inputs']['message'] : ''; ?></textarea>
                </div><!--/*.form-group-->
              </div><!--/*.col-md-12-->
              <div class="col-md-12">
                <div class="checkbox">
                  <label for="checkspam">
                    <input type="checkbox" name="antispam" id="hp">
                  </label>
                </div>
              </div><!--/*.col-md-12-->
              <div class="col-md-12">
                <button type='submit' class='btn btn-primary'>Envoyer</button>
              </div><!--/*.col-md-12-->
            </div><!--/*.row-->
          </form>
        </div><!--/*.container-->
        <!-- END CONTENT -->

      </div>
    </div>

  </div>
</div>

<?php
  unset($_SESSION['inputs']); // on nettoie les données précédentes
  unset($_SESSION['success']);
  unset($_SESSION['errors']);
?>
