<?php 
require_once __DIR__ . '/../scripts/access_validator.php';
?>

<?php

  $tickets = array();

  $file = fopen('../../assets/data-base/tickets.dat', 'r');

  while(!feof($file)) { 

    $data = fgets($file);

    $data_details = explode('#', $data);

    if($_SESSION['profile_id'] == 2) {

      if($_SESSION['id'] != $data_details[0]) {
        continue;

      } else {
        $tickets[] = $data; 
      }

    } else {
      $tickets[] = $data;
    }

  }

  fclose($file);

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
  <section aria-labelledby="view-ticket-title">
    <article class="card shadow-sm"> <!-- Adicionado shadow -->
      <header class="card-header bg-primary bg-opacity-10"> <!-- Estilo moderno -->
        <h2 id="view-ticket-title" class="mb-0 h4">Consultar Tickets</h2> <!-- Hierarquia de heading adequada -->
      </header>
      <div class="card-body">
        <?php if(empty($tickets)): ?> <!-- Controle para lista vazia -->
          <div class="alert alert-info mb-4">
            Nenhum ticket encontrado
          </div>
        <?php else: ?>
          <?php foreach($tickets as $ticket): ?>
            <?php
              $ticket_data = explode('#', $ticket);
              if(count($ticket_data) < 4) continue;
            ?>
            <div class="row g-2 mb-3">
              <div class="col-12">
                <!-- Card de chamado individual -->
                <article class="card border-primary border-opacity-25">
                  <div class="card-body">
                    <h3 class="card-title fs-5 mb-1"><?=htmlspecialchars($ticket_data[1])?></h3>
                    <h4 class="card-subtitle fs-6 text-body-secondary mb-2">
                      <?=htmlspecialchars($ticket_data[2])?>
                    </h4>
                    <p class="card-text text-muted lh-sm">
                      <?=htmlspecialchars($ticket_data[3])?>
                    </p>
                  </div>
                </article>
              </div>
            </div>
          <?php endforeach; ?>
        <?php endif; ?>

        <div class="row mt-4 g-3"> <!-- Atualizado espaçamento -->
          <div class="col-12 col-md-6"> <!-- Responsividade -->
            <a href="home.php" class="btn btn-outline-secondary w-100 py-2"> <!-- Estilo moderno -->
              <i class="bi bi-arrow-left me-2"></i>Voltar
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