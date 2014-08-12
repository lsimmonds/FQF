<?php
#{ "api_user": { "email": "test13@leonsimmonds.com", "password": "testing123" } }

if( !empty($_POST) ) {
  $input_data = $_POST;
}
else {
  $inputJSON = file_get_contents('php://input');
  if( !empty($inputJSON) ) {
    $input_data = json_decode( $inputJSON, TRUE );
  }
}
file_put_contents("/tmp/test","input_data: ".print_r($input_data,true), FILE_APPEND);

if( !empty($input_data) && !empty($input_data["api_user"]) && !empty($input_data["api_user"]["email"]) && !empty($input_data["api_user"]["password"]) ) {
    file_put_contents("/tmp/test","starting...\n", FILE_APPEND);
    $curl = curl_init();
    $JSONinput = json_encode($input_data);
    file_put_contents("/tmp/test","JSONinput: ".print_r($JSONinput,true)."\n", FILE_APPEND);
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $JSONinput);
    curl_setopt($curl, CURLOPT_URL, "http://199.195.192.136:3000/api/users/sign_in");
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(                                                                          
      'Content-Type: application/json',                                                                                
      'Content-Length: ' . strlen($JSONinput))                                                                       
    );
    file_put_contents("/tmp/test","about to call...\n", FILE_APPEND);
    $result = json_decode(curl_exec($curl),true);
    file_put_contents("/tmp/test","result: ".print_r($result,true), FILE_APPEND);
    curl_close($curl);
    if( !empty($result["email"]) && !empty($result["token"]) ) { 
      session_start();
      session_unset();
      session_regenerate_id();
      $_SESSION['user_name']=$result['name'];
      $_SESSION['user_email']=$result['email'];
      $_SESSION['user_token']=$result['token'];
      if(!empty($result['student'])) {
        $_SESSION['student']=$result['student'];
      }
      if(!empty($result['teacher'])) {
        $_SESSION['teacher']=$result['teacher'];
      }
      if(!empty($result['is_admin'])) {
        $_SESSION['is_admin']=$result['is_admin'];
      }
      echo json_encode($result);
    }
    file_put_contents("/tmp/test", "Session: ".print_r($_SESSION,true), FILE_APPEND);
  }
  ?>
