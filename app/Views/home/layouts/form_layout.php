<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" href="<?= base_url('/logoppspa'); ?>.png">
  <link rel="shortcut icon" type="image/x-icon" href="<?= base_url('/logoppspa'); ?>.png">
  <title>Pondok Pesantren Sunan Pandanaran</title>

  <?= $this->include('home/includes/style_alternate') ?>
</head>

<body>
  <div class="content-wrapper">


    <?= $this->include('home/includes/navbar_include') ?>


    <?= $this->renderSection('content') ?>
  </div>

  <?= $this->include('home/includes/footer_include') ?>

  <?= $this->include('home/includes/script_include') ?>

</body>

</html>