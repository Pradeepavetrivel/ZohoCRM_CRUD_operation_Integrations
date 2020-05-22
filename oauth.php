<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$post_params = array();

// $post_params['grant_type'] = "authorization_code";
// $post_params['client_id'] = "1000.5MBLB1QFGHFVH96DI8YYPFSOJSBSHH";
// $post_params['client_secret'] = "b58afa0554ff41e7e47ca6117846609d5a00893674";
// $post_params['code'] = "1000.38ad6ac79ad2b8c638de457c74900fec.be0e6c9abe33bbf16d991c2b46b82cd2";
// print_r($post_params);

$post_params['refresh_token'] = "1000.d816c204f8b746197f7dcc4759f5ff7c.3c0704b20bff10852538550df50d16d9";
$post_params['client_id'] = "1000.5MBLB1QFGHFVH96DI8YYPFSOJSBSHH";
$post_params['client_secret'] = "b58afa0554ff41e7e47ca6117846609d5a00893674";
$post_params['grant_type'] = "refresh_token";


$url='https://accounts.zoho.com/oauth/v2/token';


$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch,CURLOPT_POSTFIELDS, $post_params);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
$response = curl_exec($ch);
print_r($response);
// $_GET['response'] = $response;
?>
