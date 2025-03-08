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
  <title>App Help Desk - Consulta</title>
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
        <span  class="title">App Help Desk</span>
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
    <section aria-labelledby="consulta-chamado-title">
      <article class="card">
        <header class="card-header">
          <h2 id="consulta-chamado-title" class="mb-0">Consulta de chamado</h2>
        </header>
        <div class="card-body">
        <?php foreach($chamados as $chamado) { ?>
              
              <?php

                $chamado_dados = explode('#', $chamado);

                //não existe detalhes do chamado se ele não estiver completo
                if(count($chamado_dados) < 3) {
                  continue;
                }

              ?>
          <div class="row">
            <div class="col">
              <!-- Card de chamado individual -->
              <article class="card mb-3 bg-light">
                <div class="card-body">
                  <h3 class="card-title"><?=$chamado_dados[1]?></h3>
                  <h4 class="card-subtitle mb-2 text-muted"><?=$chamado_dados[2]?></h4>
                  <p class="card-text"><?=$chamado_dados[3]?></p>
                </div>
              </article>
            </div>
          </div>

          <?php } ?>
          <!-- Botão de voltar -->
          <div class="row mt-5">
            <div class="col-6">
            <a class="btn btn-lg btn-warning btn-block" href="home.php">Voltar</a>
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