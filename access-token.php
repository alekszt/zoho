<?php

function generate_access_token () {
  $post = [
    'refresh_token' => '1000.ae189b4a41d83d793e6602fe4e0d8794.ced409b2bf3f45acf4dbd9c36b2f3e48',
    'client_id' => '1000.XDZLZ2QDD515E6PWI1RH74XIFD331U',
    'client_secret' => '9134bf54e284f9d039fc0d7007db3d11af40b1732a',
    'grant_type' => 'refresh_token'
  ];
  
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://accounts.zoho.com/oauth/v2/token" );
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $post ));
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

  $response = curl_exec($ch);
  $respone = json_decode($response);

  echo '<pre>';
  print_r($response);
}

generate_access_token();

?>
