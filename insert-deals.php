<?php
function insert_deals() {
  $access_token = '1000.b59b8db8f73df4e03d52e9a0abde03bf.36045fb001fde59c8e0717add3783318';
  $post_data = [
    'data' => [
      [
        "Owner" => ['name' => 'alekseyzt', 'email' => 'alekseyzt@gmail.com'],
        "Deal_Name" => 'Deals 5',
        "Type" => "Existing Business",
        "Closing_Date" => "2022-02-23",
        "Stage" => 'Needs Analysis'
      ]
    ],
    'trigger' => [
      "approval",
      "workflow",
      "blueprint"
    ]
  ];

  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/Deals");
  curl_setopt( $ch, CURLOPT_POST, 1);
  curl_setopt( $ch, CURLOPT_POSTFIELDS, json_encode($post_data));
  curl_setopt( $ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt( $ch, CURLOPT_HTTPHEADER, array(
    "Authorization". ":" . "Zoho-oauthtoken " . $access_token,
    'Content-Type: application/x-www-form-urlencoded'
  ));

  $response = curl_exec($ch);
  $response = json_decode($response);

  echo "<pre>";
  print_r($response);
}

insert_deals();
?>
