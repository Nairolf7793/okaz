<?php 
require_once 'templates/header.php';

$listings = [
    ["title" => "test1", "price" => 30, "image" =>"rl_evergreen.jpg"],
    ["title" => "test2", "price" => 20, "image" =>"rl_evergreen.jpg"],
    ["title" => "test3", "price" => 10, "image" =>"rl_evergreen.jpg"],
];

$categories = [
    ["name" => "Jeux vidéos", "icon" => "controller"],
    ["name" => "Vêtements",  "icon" => "tag"],
    ["name" => "Meuble",  "icon" => "lamp"],
];
?>

<a href ="/templates/annonces.php">Annonce</a>
    <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="assets/image/okaz_logo.png" class="d-block mx-lg-auto img-fluid" alt="logo Okaz" width="400" loading="lazy">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">Avec Okaz, achetez et vendez vos objets</h1>
        <p class="lead">Trouvez ce que vous cherchez et donnez une seconde vie à vos objets en un cli ! 
                        Okaz est la plateforme incontournable pour vendre, acheter ou échanger tout ce que vous souhaitez : 
                        vêtements, meubles, appareils électroniques, véhicules et bien plus encore!
        </p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" class="btn btn-primary btn-lg px-4 me-md-2">Primaire</button>
          <button type="button" class="btn btn-outline-secondary btn-lg px-4">Défaut</button>
        </div>
      </div>
    </div>

    <div class="row">
        <h2 class="pb-2 border-bottom">Les dernières annonces</h2>

        <?php foreach ($listings as $listing) {
            require "templates/listing_part.php";
         } ?>

    </div>

    <div class="py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom">Les catégories</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <?php
        foreach ($categories as $key => $category){
            require "templates/category_part.php";
        }
        ?>
      
      
      
    </div>
  </div>

  
<?php require_once 'templates/footer.php' ?>





    