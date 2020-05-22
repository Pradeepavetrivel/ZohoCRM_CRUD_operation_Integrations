<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// include "/zoho_crm/oauth.php/";

// $response = $_GET['response'];

// $token_response = json_decode($response);

$headers  = array(

    'Content-Type:application/json',
	'Authorization: Zoho-oauthtoken 1000.4e8c7b0352f274a25d713fe322a90d75.4fd68591ef77de7ebf04b91928fe3d4c'
);

$post_data = array(
 // 'data' => array(
   array(
    'Company' => 'aorborc Technologies Pvt Ltd',
    'Last_Name' => 'Testing',
    'First_Name' => 'Test',
    'Email' => 'Test@aorborc.com',
    'Phone' => '9875797849'
    // 'Owner' => 'Ruben AorBorC'
 )
);

// $json = array();
// $data = new stdClass();
// $data->Company ='aorborc Technologies Pvt Ltd';
// $data->Last_Name = 'Testing';
// array_push($json, $data);

// $json_data = json_encode($json);
// print_r($json_data);

// $data = json_encode($post_data);
$data = json_encode(array("data" => $post_data));
print_r($data);

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,'https://www.zohoapis.com/crm/v2/Leads');
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
$server_output = curl_exec($ch);
print_r($server_output);
?>




<!-- curl "https://www.zohoapis.com/crm/v2/Leads" -H "Authorization: Zoho-oauthtoken 1000.659f635cf93b8dfbb12cff36b2d2d96b.d3a4d1a984d845c31f3be00b7f949603" -d "$data" -X POST -->
