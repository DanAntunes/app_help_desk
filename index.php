<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Metadados essenciais -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- SEO Básico -->
  <title>App Help Desk - Central de Suporte Técnico Especializado</title>
  <meta name="description" content="Sistema especializado em gerenciamento de chamados técnicos. Registre, acompanhe e resolva incidentes de forma eficiente.">
  <meta name="keywords" content="help desk, suporte técnico, gerenciamento de chamados, suporte online, TI, assistência remota">
  <meta name="author" content="Danilo Antunes">

  <!-- Controle de indexação -->
  <meta name="robots" content="index, follow">

  <!-- Web Manifest e Configurações PWA -->
  <link rel="manifest" href="./src/assets/images/favicons/site.webmanifest">
  <meta name="theme-color" content="#ffffff">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="./src/assets/images/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./src/assets/images/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./src/assets/images/favicons/favicon-16x16.png">

 <!-- Pré-carregamento de recursos críticos -->
  <link rel="preload" href="./node_modules/bootstrap/dist/css/bootstrap.min.css" as="style">
  
  <!-- Framework CSS -->
  <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">

  <!-- Folha de estilo principal -->
  <link rel="stylesheet" href="./src/assets/css/style.css">
</head>
<body>
 <!-- Cabeçalho com navegação -->
 <header>
  <nav class="navbar navbar-dark">
    <a class="navbar-brand" href="#">
      <div class="mb-0">
        <img src="./src/assets/images/logo.png" alt="Logo App Help Desk" class="d-inline-block align-top logo">
        <span class="title">App Help Desk</span>
      </div>
    </a>
  </nav>
 </header>
<!-- Conteúdo principal -->
<main class="container my-5">
  <section aria-labelledby="login-title">
    <article class="card card-login">
      <header class="card-header">
        <h2 id="login-title" class="mb-0 text-center text-uppercase">Login</h2>
      </header>
      <div class="card-body">
        <form action="http://localhost/projects/app_help_desk/src/assets/scripts/validate_login.php" method="post">
          <div class="mb-3">
            <label for="email" class="visually-hidden">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
          </div>
          <div class="mb-3">
            <label for="password" class="visually-hidden">Senha</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Senha" required>
          </div>
          <?php if (isset($_GET['login']) && $_GET['login'] == 'error') { ?> 
            <div class="text-danger mb-3">
              Usuário ou senha inválido(s)
            </div>
          <?php } ?>

          <?php if (isset($_GET['login']) && $_GET['login'] == 'errorSecond') { ?>
            <div class="text-danger mb-3">
              Faça Login antes de acessar as páginas protegidas.
            </div>
          <?php } ?>

          <div class="d-grid">
            <button type="submit" class="btn btn-lg btn-info">Entrar</button>
          </div>
        </form>
      </div>
    </article>
  </section>
</main>
<!-- Rodapé -->
<footer class="text-center py-3">
  <small>&copy; 2025 App Help Desk. Todos os direitos reservados.</small>
</footer>
</body>
</html>