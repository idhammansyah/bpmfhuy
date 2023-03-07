<!doctype html>
<html lang="en" data-bs-theme="dark">

<head>
  <meta charset="UTF-8">
  <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0">     -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?= $title ?></title>

  <!-- style -->
  <link rel="stylesheet" href="<?=base_url()?>/lib/css/style.css">

  <!-- stylesheet for fontawesome -->
  <link href="<?= base_url();?>/lib/fontawesome-v6.1/css/all.min.css" rel="stylesheet">

  <!-- icon shortcut -->
  <link rel="shortcut icon" href="<?= base_url();?>/logo/yarsi.jpg">

  <!-- Bootstrap -->
  <link rel="stylesheet" href="<?= base_url();?>/lib/css/bootstrap.min.css" />

  <!-- JQuery dan Javascript Bootstrap -->
  <script src="<?= base_url()?>/lib/js/bootstrap.min.js"></script>

  <!-- jquery versi 3.6.0 -->
  <script src="<?= base_url();?>/lib/jquery-v3.6.0/jquery.min.js"></script>

</head>

<body class="min-vh-100">
  <div class="container-fluid">
    <nav class="navbar sticky-top navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">BPM FHUY</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled">Disabled</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <aside class="container-fluid">
    <?= $this->renderSection('content'); ?>
  </aside>

  <footer>

  </footer>

  <?= $this->renderSection('scripts'); ?>
</body>

</html>