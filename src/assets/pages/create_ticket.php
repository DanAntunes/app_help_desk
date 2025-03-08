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
  <title>App Help Desk - Abrir Ticket</title>
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
<main class="container my-4">
  <section aria-labelledby="chamado-title">
    <article class="card card-ticket">
      <header class="card-header">
        <h2 id="chamado-title" class="mb-0 text-center text-uppercase h4">Abrir Ticket</h2> <!-- Adicionado h4 para hierarquia -->
      </header>
      <div class="card-body">
        <form action="" method="post" novalidate>
          <div class="mb-3">
            <label for="titulo" class="form-label">Título</label>
            <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título" required>
          </div>

          <div class="mb-3">
            <label for="categoria" class="form-label">Categoria</label>
            <select id="categoria" name="categoria" class="form-select" required>
              <option value="">Selecione</option>
              <option value="criacao-usuario">Criação Usuário</option>
              <option value="impressora">Impressora</option>
              <option value="hardware">Hardware</option>
              <option value="software">Software</option>
              <option value="rede">Rede</option>
            </select>
          </div>

          <div class="mb-4"> 
            <label for="descricao" class="form-label">Descrição</label>
            <textarea id="descricao" name="descricao" class="form-control" 
                      rows="4" placeholder="Descreva o problema" required></textarea> <!-- Aumentado rows -->
          </div>

          <div class="row mt-4 g-3">
            <div class="col-md-6">
              <a class="btn btn-outline-warning w-100 py-2" href="home.php"> <!-- Atualizado classes -->
                <i class="bi bi-arrow-left me-2"></i>Voltar <!-- Adicionado ícone -->
              </a>
            </div>
            <div class="col-md-6">
              <button class="btn btn-primary w-100 py-2" type="submit"> <!-- Atualizado classes -->
                <i class="bi bi-plus-circle me-2"></i>Abrir <!-- Adicionado ícone -->
              </button>
            </div>
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