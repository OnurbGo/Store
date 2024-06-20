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
  <link rel="shortcut icon" href="imagens/icone.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <header class="header">
    <a href="index.php" title="Home" class="header-logo">
      <img class="logo" src="imagens/logo_meia_lua_store.png" alt="Logo" title="Logo" />
    </a>

    <nav class="header-nav">
      <ul>
        <li><a href="index.php?pg=home" title="Home">Home</a></li>
        <li><a href="index.php?pg=loja" title="Loja">Loja</a></li>
        <li><a href="index.php?pg=contato" title="Contato">Contato</a></li>
        <li><a href="index.php?pg=equipe" title="Equipe">Equipe</a></li>
      </ul>
    </nav>
  </header>

  <!--Aqui Vai O Conteudo Dos Sites-->
  <?php
$pg = $_GET["pg"] ?? "Home";

//include "paginas/{$pg}.php"
  $pg = "{$pg}.php";

//verificar se a pagina existe
  if(file_exists($pg)){
    include $pg;
  }else{
    include "Erro.php";
  }
?>
  <!--Fim Do Conteudo-->

</body>

<footer class="footer">
  <a href="index.php?pg=equipe">
  <img class="logocybertech" src="imagens/logo_cybertech.png" alt="logo cybertech" title="logo cybertech" />
  </a>
  <p class="textobranco">Created By Cybertech</p>
  <p class="textobranco">Todos os direitos reservados a Bruno Gotardo</p>
</footer>

</html>