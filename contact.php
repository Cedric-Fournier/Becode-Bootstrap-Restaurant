<?php include ('./Partials/header.php') ?>
<?php include ('./Partials/menu.php'); ?>

<div class="row">
  <div class="col-sm-6">
    <form>
      <div class="form-group">
        <label for="exampleInputLastName1">Nom</label>
        <input type="text" class="form-control" id="exampleInputLastName1" aria-describedby="lastNameHelp" placeholder="Entrer votre Nom">
      </div>
      <div class="form-group">
        <label for="exampleInputFirstName1">Prénom</label>
        <input type="text" class="form-control" id="exampleInputFirstName1" aria-describedby="firstNameHelp" placeholder="Entrer votre Prénom">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">E-mail</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer votre E-mail">
        <small id="emailHelp" class="form-text text-muted">Nous ne partagerons jamais votre E-mail avec quelqu'un d'autre.</small>
      </div>
      <div class="form-group">
        <label for="exampleFormControlSelect2">Objet du message</label>
        <select class="form-control">
          <option disabled selected>Choisissez votre objet</option>
          <option>Emploi</option>
          <option>Réservation</option>
          <option>Événement</option>
          <option>Réclamation</option>
          <option>Problème divers</option>
          <option>Autres</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputMessage1">Message</label>
        <textarea type="text" class="form-control" id="exampleInputMessage1" aria-describedby="messageHelp" placeholder="Entrer votre message"></textarea>
      </div>
      <button type="submit" class="btn btn-info"><i class="fas fa-check-circle"></i> Submit</button>
    </form>
  </div>

  <div class="col-sm-6">

    <ul class="list-group">
      <li class="list-group-item disabled">Informations</li>
      <li class="list-group-item"><strong class="text-info">Adresse : </strong>12 Boulevard Guillaume Van Haelen 1090 Bruxelles</li>
      <li class="list-group-item"><strong class="text-info">Telephone : </strong>02/46 87 91 22 </li>
      <li class="list-group-item"><strong class="text-info" class="text-info">E-mail Information : </strong>info@johnson-ice.be</li>
      <li class="list-group-item"><strong class="text-info">E-mail Administration : </strong>admin@johnson-ice.be</li>
    </ul>

  </div>

</div>



<?php include ('./Partials/footer.php'); ?>
