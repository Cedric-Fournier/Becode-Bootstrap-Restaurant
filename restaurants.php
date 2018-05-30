<?php include ('./Partials/header.php') ?>
<?php include ('./Partials/menu.php'); ?>

<div class="row">

  <div class="col-sm-6">

    <ul class="list-group">
      <li class="list-group-item disabled">Johnson Ice Forest</li>
      <li class="list-group-item">Adresse : 12 Boulevard Guillaume Van Haelen</li>
      <li class="list-group-item">Heure d'ouverture : 08h - 19h tous les jours sauf dimanche</li>
      <li class="list-group-item">Fermé : Le dimanche</li>
      <li class="list-group-item">Plan d'acces : Tram 97 / 82</li>
    </ul>

  </div>

  <div class="col-sm-6">
    <div id="map"></div>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMhB3M_h_8ZZ5-t2u-AnBL0VPtkxGOAeE&callback=initMap"></script>

  </div>
</div>
<br>
<br>
<br>
<div class="row">

  <div class="col-sm-6">

    <ul class="list-group">
      <li class="list-group-item disabled">Johnson Ice Uccle</li>
      <li class="list-group-item">Adresse : 67 Chaussée d'Alsemberg</li>
      <li class="list-group-item">Heure d'ouverture : 08h - 19h tous les jours sauf dimanche</li>
      <li class="list-group-item">Fermé : Le dimanche</li>
      <li class="list-group-item">Plan d'acces : Bus 54</li>
    </ul>

  </div>

  <div class="col-sm-6">
    <div id="map2"></div>

  </div>
</div>
<br>

<?php include ('./Partials/footer.php'); ?>
