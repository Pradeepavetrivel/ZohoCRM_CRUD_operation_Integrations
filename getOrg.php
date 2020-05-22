<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$authtoken = array("Authorization: Zoho-oauthtoken 1000.d2801b8b49ac55805e457a2f7a5e986f.8201c7f6fc124175f552fa7aad0ba82a");


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/org');
curl_setopt($ch, CURLOPT_POST, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $authtoken);
$server_output = curl_exec($ch);
print_r($server_output);
?>

<!-- 
curl "https://www.zohoapis.com/crm/v2/org" -X GET -H "Authorization: Zoho-oauthtoken 1000.401e2f05b4c9146c94c8863bb7b59c48.e553c5b6e0eaaafda01c969fc771633d" -->