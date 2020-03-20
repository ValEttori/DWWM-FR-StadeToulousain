  <!--Inclusion du Header-->
<?php 
include('Include/header.php');
?>
  <!--Formulaire de contact-->
  <div class="card" id="form">
  <section class="card-body" id="form2" >
    <form>
      <fieldset>
        <div class="form-group row">
          <label class="col-form-label" for="contact">Personne à contacter :</label>
          <input type="text" class="form-control col-lg-5" required>
        </div>
        <div class="form-group row">
          <label class="col-form-label" for="satiSelect">Adresse :</label>
            <textarea class="form-control col-sm-5" rows="2" required></textarea>
          </div>
        <div class="form-group row">
          <label class="col-form-label" for="postal">Code postal :</label>
          <input type="text" class="form-control col-lg-5" required>
        </div>
        <div class="form-group row">
          <label class="col-form-label" for="ville">Ville :</label>
          <input type="text" class="form-control col-lg-5" required>
        </div>
        <div class="form-group row">
          <label class="col-form-label" for="mail">E-mail :</label>
          <input type="mail" class="form-control col-lg-5" required>
        </div>
        <!-- Boutons de validation -->
        <div class="col-md-11 text-center"> 
        <button type="submit" class="btn btn-danger">Valider</button>
        </div>
      </fieldset>
    </form>
  </section>
</div>

  <!--Inclusion du Footer-->
<?php 
include('Include/footer.php');
?>