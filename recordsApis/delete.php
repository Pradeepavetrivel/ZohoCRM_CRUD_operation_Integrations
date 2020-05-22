<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



$headers  = array(

    'Content-Type:application/json',
	'Authorization: Zoho-oauthtoken 1000.260ad5936a2a244b055f572a47978e87.d22eb4547e6fb34c2f9da413c30ab3d5'
);

// $post_data = array(
//    array(
//    	// 'id' => '3197609000000395001',
//     'Company' => 'aorborc Technologies Pvt Ltd',
//     'Last_Name' => 'Sample',
//     'First_Name' => 'Testing',
//     'Email' => 'Test@aorborc.com',
//     'Phone' => '9875797849'
   
//  )
// );

// $data = json_encode(array("data" => $post_data));
// print_r($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Leads/3197609000000395001');
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, DELETE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
$server_output = curl_exec($ch);
print_r($server_output);
?>
