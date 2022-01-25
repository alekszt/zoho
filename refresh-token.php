<?php
define('TOKEN', '1000.f8763af00b85ceb07c77ba8d902806bc.508568cd2c56026a0458d0107626d070');
function generate_refresh_token() {
  $post = [
    'code' => '1000.dc8b894a5b0068cca063fc917e45252e.c56665802aeee7ea538770993f33570e',
    'redirect_url' => 'https://aleks.zt.ua/api/zoho',
    'client_id' => '1000.XDZLZ2QDD515E6PWI1RH74XIFD331U',
    'client_secret' => '9134bf54e284f9d039fc0d7007db3d11af40b1732a',
    'grant_type' => 'authorization_code'
  ];
  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://accounts.zoho.com/oauth/v2/token");
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query( $post ));
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

  $response = curl_exec($ch);
  $response = json_encode($response, true);

  echo "<pre>";
  print_r($response);

}
generate_refresh_token();
?>
