<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/img/favicon.png">
  <title>Pondok Pesantren Sunan Pandanaran</title>
  
  <?= $this->include('home/includes/style_include') ?>
</head>

<body>
  <div class="content-wrapper">
    

    <?= $this->include('home/includes/navbar_include') ?>

    
    <?= $this->include('home/includes/banner_include') ?>
  

    <?= $this->renderSection('content') ?>
  </div>
  
  <?= $this->include('home/includes/footer_include') ?>

  <?= $this->include('home/includes/script_include') ?>
  
</body>

</html>