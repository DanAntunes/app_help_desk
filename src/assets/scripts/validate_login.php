<?php

  session_start();

  $authenticated_user = false;
  $user_id = null;
  $user_profile_id = null ;
  $profiles = [1 => 'Admin' , 2 => 'User' ];

  //usuarios do sistema
  $user_app = array(
    array('id' => 1 , 'email' => 'adm@teste.com.br', 'password' => '1234' , 'profile_id' => 1),
    array('id' => 2 , 'email' => 'user@teste.com.br', 'password' => '1234' , 'profile_id' => 1),
    array('id' => 3 , 'email' => 'dan@teste.com.br', 'password' => '1234' , 'profile_id' => 2),
    array('id' => 4 , 'email' => 'nilo@teste.com.br', 'password' => '1234' , 'profile_id' => 2),
  );

 foreach($user_app as $user) {
   if($user['email'] == $_POST['email'] && $user['password'] == $_POST['password']) {
     $authenticated_user = true;
     $user_id = $user['id'];
     $user_profile_id = $user[ 'profile_id'] ;
   }
  };

  if($authenticated_user) {
    $_SESSION['authenticated'] = 'YES';
    $_SESSION['id'] = $user_id;
    $_SESSION['profile_id'] = $user_profile_id;
    header('Location: ../../../src/assets/pages/home.php');
    exit;
  } else {
    $_SESSION['authenticated'] = 'NO';
    header('Location: ../../../index.php?login=error');
    exit;
  }

?>