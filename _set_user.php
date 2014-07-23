<?php
  session_start();
  session_unset();
  if( !empty($_POST["user"]) ) { # && $_POST['user']['name'] && $_POST['user']['email'] && $_POST['user']['token'] ) {
    $user = json_decode($_POST["user"],true);
    $_SESSION['user_name']=$user['name'];
    $_SESSION['user_email']=$user['email'];
    $_SESSION['user_token']=$user['token'];
    if(!empty($user['student'])) {
      $_SESSION['student']=$user['student'];
    }
    if(!empty($user['teacher'])) {
      $_SESSION['teacher']=$user['teacher'];
    }
  }
  #file_put_contents("/tmp/test",print_r($_SESSION,true));
?>
