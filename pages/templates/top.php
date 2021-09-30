<?php
  if(!empty($_SESSION['menu'])){
    $menuItems = $_SESSION['menu'];
  }
  else{
    include_once($root."/src/php/functions/getMenu.php");
    GetMenu($host, $api, $root);
    $menuItems = $_SESSION['menu'];
  }
  if(!empty($_SESSION['subMenu'])){
    $subMenuItems = $_SESSION['subMenu'];
  }
  if(isset($_SESSION['cardAmount'])){
    $cardAmount = $_SESSION['cardAmount'];
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/dist/style/<?= $CSS?>.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Gentium+Basic:wght@400;700&display=swap" rel="stylesheet">
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <?php if($Page == 'Checkout'): ?>
    <script src="https://js.stripe.com/v3/"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
  <?php endif ?>
  <meta name="theme-color" content="#000">
  <meta name="apple-mobile-web-app-status-bar-style" content="#0a0a0a" />
  <meta name="description" content="<?= $pageDescription ?>">
  <title><?= $PageTitle ?></title>
</head>
<body>
<header>
  <div class="menu">
    <div class="logo">
      <a href="/">
        <img src="/src/img/logo.png" alt="logo">
      </a>
    </div>
    <nav>
      <ul>
        <?php foreach($menuItems as $menuItem):?>
          <li 
            class="<?php if($Page == $menuItem['Name']){echo 'active';}?>">
            <a href="<?=$menuItem['Link']?>">
              <span><?=$menuItem['Name']?></span>
            </a>
          </li>  
        <?php endforeach; ?>
      </ul>
    </nav>
    <div class="cardIcon">
      <a href="/card">
        <?php if(isset($cardAmount)): ?>
          <span id="cardAmount"><?=$cardAmount?></span>
        <?php else: ?>
          <span id="cardAmount"></span>
        <?php endif; ?>
        <img src="/src/img/card.jpg">
      </a>
    </div>
  </div>
</header>