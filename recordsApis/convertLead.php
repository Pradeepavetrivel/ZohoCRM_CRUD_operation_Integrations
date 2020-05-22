<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


$headers  = array(

    'Content-Type:application/json',
	'Authorization: Zoho-oauthtoken 1000.6d2303c56e202634ede87b391fb0ad57.d33766eb3e3945f69200fccecdbe91cd'
);

$post_data = array(
 
   array(
    'Company' => 'aorborc Technologies Pvt Ltd',
    'Last_Name' => 'Testing',
    'First_Name' => 'Test',
    'Email' => 'Test@aorborc.com',
    'Phone' => '9875797849'
   
 )
);

$data = json_encode(array("data" => $post_data));
print_r($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Leads/3197609000000393001/actions/convert');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
$server_output = curl_exec($ch);
print_r($server_output);
?>


<!-- curl "https://www.zohoapis.com/crm/v2/Leads/3197609000000393001/actions/convert" -H "Authorization: Zoho-oauthtoken 1000.308b5b19941419a9c06fc55435eed6c0.e8a6bde2108a53588daae6a65f32d07f" -d "@convertlead.json" -X POST -->