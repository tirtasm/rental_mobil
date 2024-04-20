<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Halaman
    <?php echo $data['judul'] ?>
  </title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<body>
  <nav class="navbar navbar-expand-lg bg-body-secondary">
    <div class="container">
      <a class="navbar-brand" href="#">PHP MVC</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL; ?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/cars">Daftar Mobil</a>
          </li>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/about">Kontak</a>
          </li>
          <!-- <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL; ?>/home/login">Login</a>
          </li>
           -->

        </ul>
          
      </div>
      



    </div>
  </nav>