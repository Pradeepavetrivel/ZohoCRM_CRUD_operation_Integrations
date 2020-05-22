<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$authtoken = array("Authorization: Zoho-oauthtoken 1000.401e2f05b4c9146c94c8863bb7b59c48.e553c5b6e0eaaafda01c969fc771633d");


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/org/photo?file=""');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $authtoken);
$server_output = curl_exec($ch);
print_r($server_output);
?>


<!-- curl "https://www.zohoapis.com/crm/v2/org/photo" -X POST -H "Authorization: Zoho-oauthtoken 1000.401e2f05b4c9146c94c8863bb7b59c48.e553c5b6e0eaaafda01c969fc771633d" -F "file=php-logo.png" -->