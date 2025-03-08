<?php

 session_start();

 $title = str_replace('#', '-', $_POST['title']);
 $category = str_replace('#', '-', $_POST['category']);
 $description = str_replace('#', '-', $_POST['description']);
 

 $text = $_SESSION['id'] . '#' . $title . '#' . $category . '#' . $description . PHP_EOL;

 $arquivo = fopen('../../assets/data-base/tickets.dat', 'a');
 fwrite($arquivo, $text);
 fclose($arquivo);
 header('Location: ../../../src/assets/pages/create_ticket.php');

?>

<a href="../../assets/data-base/"></a>