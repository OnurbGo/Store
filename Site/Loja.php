<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Meia-Lua Store</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet" />

  <link rel="stylesheet" href="css/style.css" />
  <link rel="shortcut icon" href="Imagens/Icone.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>

  <!--Inicio Do Carrocel-->
  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <a href="index.php?pg=Parabellum">
          <img class="banner" src="Imagens/Banner Parabellum.png" class="d-block w-100" alt="Banner Parabellum">
        </a>
      </div>
      <div class="carousel-item">
        <a href="index.php?pg=Bombs and piretes">
          <img class="banner" src="Imagens/Banner Piratas.png" class="d-block w-100" alt="Banner Pirata">
        </a>
      </div>
      <div class="carousel-item">
        <a href="index.php?pg=Survival Instinct">
          <img class="banner" src="Imagens/Banner Survival.png" class="d-block w-100" alt="Banner Jogo 3">
        </a>
      </div>
    </div>
    <!--Fim Do Carrocel-->

    <!--Inicio Controles-->
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"><</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">></span>
    </button>
  </div>
  <!--Fim Controles-->


  <main class="container">
    <h1>Produtos Em Destaque</h1>
    <div class="flex">
      <div class="flex-coluna">
        <a class="textoflex" href="index.php?pg=Parabellum">
          <img src="Imagens/Capa.png" alt="Parabellum" title="Parabellum">
          <p class="flexp">Parabellum</p>
        </a>
      </div>
      <div class="flex-coluna">
        <a class="textoflex" href="index.php?pg=Bombs and piretes">
          <img src="Imagens/Capa Piratas.jpeg" alt="Piratas E Bombas" title="Piratas E Bombas">
          <p class="flexp">Pirates And Bombs</p>
        </a>

      </div>
      <div class="flex-coluna">
        <a class="textoflex" href="index.php?pg=Survival Instinct">
          <img src="Imagens/Capa Survival.png" alt="Survival Instinct" title="Survival Instinct">
          <p class="flexp">Survival Instinct</p>
        </a>

      </div>
      <div class="flex-coluna">
        <img src="" alt="Jogo4" title="Jogo4" />
        <p class="flexp">Jogo4</p>
      </div>
    </div>
  </main>

  <br><br><br><br><br><br>
</body>

</html>