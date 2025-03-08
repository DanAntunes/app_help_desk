<?php 
require_once __DIR__ . '/../scripts/access_validator.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Metadados essenciais -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <!-- SEO Básico -->
  <title>App Help Desk - Home</title>
  <meta name="description" content="Sistema especializado em gerenciamento de chamados técnicos. Registre, acompanhe e resolva incidentes de forma eficiente.">
  <meta name="keywords" content="help desk, suporte técnico, gerenciamento de chamados, suporte online, TI, assistência remota">
  <meta name="author" content="Danilo Antunes">

  <!-- Controle de indexação -->
  <meta name="robots" content="index, nofollow">

  <!-- Web Manifest e Configurações PWA -->
  <link rel="manifest" href="../../../public/favicons/site.webmanifest">
  <meta name="theme-color" content="#ffffff">

  <!-- Favicon -->
  <link rel="apple-touch-icon" sizes="180x180" href="../../../public/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../../public/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../../public/favicons/favicon-16x16.png">

 <!-- Pré-carregamento de recursos críticos -->
  <link rel="preload" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css" as="style">
  
  <!-- Framework CSS -->
  <link rel="stylesheet" href="../../../node_modules/bootstrap/dist/css/bootstrap.min.css">

  <!-- Folha de estilo principal -->
  <link rel="stylesheet" href="../../../src/assets/css/style.css">
</head>
<body>
 <!-- Cabeçalho com navegação -->
 <header>
  <nav class="navbar navbar-dark">
    <a class="navbar-brand" href="#">
      <div class="mb-0">
        <img src="../../../src/assets/images/logo.png" alt="Logo App Help Desk" class="d-inline-block align-top logo">
        <span class="title">App Help Desk</span>
      </div>
    </a>
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../scripts/logoff.php">
            SAIR
          </a>
        </li>
      </ul>
  </nav>
 </header>
<!-- Conteúdo principal -->
<main class="container my-5">
  <section aria-labelledby="menu-title">
    <article class="card card-chamado">
      <header class="card-header">
        <h2 id="menu-title" class="mb-0 text-center">Menu</h2>
      </header>
      <div class="card-body">
        <div class="row g-3">
          <div class="col-6 d-flex justify-content-center align-items-center">
            <a href="create_ticket.php" class="text-decoration-none" title="Abrir Chamado">
              <img src="../images/formulario_abrir_chamado.png" 
                   class="img-fluid img-form transition-scale" 
                   alt="Formulário para abrir chamado">
            </a>
          </div>
          <div class="col-6 d-flex justify-content-center align-items-center">
            <a href="view_tickets.php" class="text-decoration-none" title="Consultar Chamado">
              <img src="../images/formulario_consultar_chamado.png" 
                   class="img-fluid img-form transition-scale" 
                   alt="Formulário para consultar chamado">
            </a>
          </div>
        </div>
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