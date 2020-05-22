<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "oauth.php";

$response = $_GET['response'];

$token_response = json_decode($response); 

// print_r($token_response->access_token);

$post_data = array("contact_name"=>"Pradeepa Pradeepa");//contact_name is a mandatory field

$data = array("JSONString" => json_encode($post_data));//Must encode data first and then assign it to JSONString.
print_r($data);

// $authToken="AuthToken Here";
$organization_id="691425013";

$headers  = array(
   'Authorization: Zoho-oauthtoken '.$token_response->access_token.,
);
print_r($headers);


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://books.zoho.com/api/v3/contacts?organization_id='.$organization_id);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$server_output = curl_exec($ch);
print_r($server_output);
?>