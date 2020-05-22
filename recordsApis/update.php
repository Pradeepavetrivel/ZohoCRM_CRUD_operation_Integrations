<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$headers  = array(

    'Content-Type:application/json',
	'Authorization: Zoho-oauthtoken 1000.1825ea173e4b7a92bd155eadddbd2ada.cfe0005519e2a30820349aaf1e27adbb'
);

$post_data = array(
   array(
   	'id' => '3197609000000393027',
   	'Account_Name' => 'Testing',
    'Account_Number' => '74658649348475867',
    'Email' => 'Test@aorborc.com',
    'Phone' => '9665655675'
   
 )
);

$data = json_encode(array("data" => $post_data));
print_r($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Accounts');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
$server_output = curl_exec($ch);
print_r($server_output);
?>
