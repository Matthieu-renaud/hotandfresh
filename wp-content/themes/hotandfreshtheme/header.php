<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head() ?>
</head>

<body>
  <header>
    <div class="nav">
      <div class="logo">
        <a href="<?php echo home_url('/'); ?>">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo-hotandfresh.png" alt="Logo Hot&Fresh" height="100px">
        </a>  
      </div>
      <div class="lien">
        <ul>
          <li><a href="">Accueil</a></li>
          <li><a href="">Nos Formules</a></li>
          <li><a href="">Notre Carte</a></li>
          <li><a href="">Nos Valeurs</a></li>
        </ul>
      </div>
      <div class="tel">
        <div class="numero"><a href="tel:0950155894">09 50 15 58 94</a></div>
        <ul class="ul-tel">
          <li><a href=""><i class="fas fa-shopping-basket"></i></a></li>
          <li><a href=""><i class="far fa-user-circle"></i></a></li>
        </ul>
      </div>
    </div>
  </header>