<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// $id = $_GET['ID'];
// print_r($id);

$headers = array(
    'Content-Type:application/json',
	'Authorization: Zoho-oauthtoken 1000.260ad5936a2a244b055f572a47978e87.d22eb4547e6fb34c2f9da413c30ab3d5'
);


//Get Method

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Contacts/search?email=pradeepa@aorborc.com');
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
$server_output = curl_exec($ch);
print_r($server_output);
?>
<!-- 
curl "https://www.zohoapis.com/crm/v2/Contacts/search?email=pradeepa@aorborc.com" -X GET -H "Authorization: Zoho-oauthtoken 1000.260ad5936a2a244b055f572a47978e87.d22eb4547e6fb34c2f9da413c30ab3d5" -->