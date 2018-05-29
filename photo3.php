<?php include ('./Partials/header.php') ?>
<?php include ('./Partials/menu.php'); ?>

<div class="row">
  <div class="col-sm-4">
    <img src="./Assets/images/pomme.jpeg" alt="Glace Pomme" height="350" width="350">
  </div>
  <div class="col-sm-4">
    <img src="./Assets/images/praline.jpg" alt="Glace Praline" height="350" width="350">
  </div>
  <div class="col-sm-4">
    <img src="./Assets/images/stracciatella.jpg" alt="Glace Stracciatella" height="350" width="350">
  </div>
</div>

<br>

<div class="row">
  <div class="col-sm-12">
    <nav aria-label="Page navigation example">
      <ul class="pagination justify-content-end">
        <li class="page-item">
          <a class="page-link text-info" href="./photo2.php">Previous</a>
        </li>
        <li class="page-item"><a class="page-link" href="./photo.php">1</a></li>
        <li class="page-item"><a class="page-link" href="./photo2.php">2</a></li>
        <li class="page-item active"><a class="page-link" href="./photo3.php">3</a></li>
        <li class="page-item"><a class="page-link" href="./photo4.php">4</a></li>
        <li class="page-item">
          <a class="page-link text-info" href="./photo4.php">Next</a>
        </li>
      </ul>
    </nav>
  </div>
</div>

<?php include ('./Partials/footer.php'); ?>
