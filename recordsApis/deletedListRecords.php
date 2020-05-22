<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $id = $_GET['ID'];
// print_r($id);

$authtoken = array("Authorization: Zoho-oauthtoken 1000.260ad5936a2a244b055f572a47978e87.d22eb4547e6fb34c2f9da413c30ab3d5");


//Get Method

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Leads/deleted');
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $authtoken);
$server_output = curl_exec($ch);
print_r($server_output);
?>