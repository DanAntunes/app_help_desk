<?php

 session_start();

 $title = str_replace('#', '-', $_POST['title']);
 $categoria = str_replace('#', '-', $_POST['categoria']);
 $descricao = str_replace('#', '-', $_POST['descricao']);

 //implode('#', $_POST);

 $text = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

 //abrindo o arquivo
 $arquivo = fopen('../../../../../app_help_desk/arquivo.hd', 'a');
  //escrevendo o texto
 fwrite($arquivo, $text);
  //fechando o arquivo
 fclose($arquivo);
 //echo $text;
 header('Location: /phpstudy/app_help_desk/abrir_chamado.php');

?>