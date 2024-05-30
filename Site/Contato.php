<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Meia-Lua Store</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="css/style.css" />
    <link rel="shortcut icon" href="Imagens/Icone.png" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>

  <body>
    <header class="header">
      <a href="index.php" title="Home" class="header-logo">
        <img
          class="logo"
          src="Imagens/Logo Meia Lua.png"
          alt="Logo"
          title="Logo"
        />
      </a>

      <nav class="header-nav">
        <ul>
          <li><a href="index.php" title="Home">Home</a></li>
          <li><a href="Loja.php" title="Loja">Loja</a></li>
          <li><a href="Contato.php" title="Contato">Contato</a></li>
          <li><a href="Equipe.php" title="Equipe">Equipe</a></li>
        </ul>
      </nav>
    </header>

    <div class="centro">
      <h1>Nos Contate Aqui:</h1>
      <br />
      <form name="formContato">
        <label for="nome">Digite seu nome completo:</label>
        <input type="text" name="nome" id="nome" required />
        <br />
        <label for="email">Digite seu e-mail:</label>
        <input type="email" name="email" id="email" required />
        <br />
        <label for="mensagem">Digite sua mensagem:</label>
        <textarea
          name="mensagem"
          id="mensagem"
          required
          cols="30"
          rows="10"
        ></textarea>
        <br />

        <button class="botao" type="button">Enviar Mensagem</button>

      </form>
    </div>

  <br><br><br>
  </body>

  <footer class="footer">
    <img
      class="logocybertech"
      src="Imagens/Logo Cybertech.png"
      alt="logo cybertech"
      title="logo cybertech"
    />
    <p class="textobranco">Created By Cybertech</p>
    <p class="textobranco">Todos os direitos reservados a Bruno Gotardo</p>
  </footer>
</html>
