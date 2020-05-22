<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $id = $_GET['ID'];
// print_r($id);

$authtoken = array("Authorization: Zoho-oauthtoken 1000.5468e0f059c39d23c737a96afac707c3.ccaa2315712fda82aae6faa23c04f6a2");


//Get Method

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Leads');
// curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Contacts/3197609000000270001');
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $authtoken);
$server_output = curl_exec($ch);
print_r($server_output);
?>