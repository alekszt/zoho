<?php
function insert_tasks() {
  $access_token = '1000.85c04819e3dadfd74b5aed1ae2d67f14.2415501ae441497288393e93c7fe730f';
  $post_data = [
    'data' => [
      [
        "Owner" => ["name" => "alekseyzt", "email" => "alekseyzt@gmail.com"],
        "Subject" => "Tasks Deals 6",
        "What_Id" => ["Deals" => ["name" => "Deals 5"]],
        "Due_Date" => "2022-02-25",
        "Priority" => "High",
        "Description" => "Description Deals 6"
      ]
    ],
    'trigger' => [
      "approval",
      "workflow",
      "blueprint"
    ]
  ];

  $ch = curl_init();
  curl_setopt( $ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/Tasks");
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

insert_tasks();
?>
