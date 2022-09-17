<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= base_url(); ?>asset/css/style.css">
    <title><?= $judul; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container text-light">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li <?= $this->uri->segment(1) == 'home' || $this->uri->segment(1) == '' ? 'class="bg-danger"' : ''?>>
          <a class="nav-link" aria-current="page" href="<?= base_url(); ?>home">Home</a>
        </li>
        <li <?= $this->uri->segment(1) == 'mahasiswa' ? 'class="bg-danger"' : ''?>>
          <a class="nav-link" href="<?=base_url(); ?>mahasiswa">Mahasiswa</a>
        </li>
      </ul>
    </div>
  </div>
</nav>