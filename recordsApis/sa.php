code = (isset($_REQUEST['code'])) ? $_REQUEST['code'] : "";
$client_id = "xxxxxxxxxxxx";
$client_secrect = "xxxxxxxxxxxxxx";
$uri = "http://localhost/zohoapi/apitest.php";
?>
<a href="https://accounts.zoho.com/oauth/v2/auth?scope=ZohoCRM.modules.all&client_id=<?php echo $client_id; ?>&response_type=code&access_type=offline&redirect_uri=<?php echo $uri; ?>">Get access Token</a>

<?php
if(isset($_REQUEST['code'])){
$curl = curl_init();
curl_setopt_array($curl, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://accounts.zoho.com/oauth/v2/token?code='.$code.'&redirect_uri='.$uri.'&client_id='.$client_id.'&client_secret='.$client_secrect.'&grant_type=authorization_code',
    CURLOPT_POST => 1,
));
$resp = curl_exec($curl);
curl_close($curl);
$resp = json_decode($resp);
echo "<pre>";
print_r($resp);
echo "</pre>";

$curlRef = curl_init();
curl_setopt_array($curlRef, array(
    CURLOPT_RETURNTRANSFER => 1,
    CURLOPT_URL => 'https://accounts.zoho.com/oauth/v2/token?refresh_token=xxxxxx&client_id='.$client_id.'&client_secret='.$client_secrect.'&grant_type=refresh_token',
    CURLOPT_POST => 1,
));
$respRef = curl_exec($curlRef);
curl_close($curlRef);
$respRef = json_decode($respRef);
echo "<pre>";
print_r($respRef);
echo "</pre>";

//Create an array of custom headers.
$customHeaders = array(
    'Authorization: Zoho-oauthtoken '.$respRef->access_token
);

$post_url = 'https://www.zohoapis.com/crm/v2/Potentials/xxxxxx/getRelatedRecords';

$agent= $_SERVER['HTTP_USER_AGENT'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $customHeaders);
curl_setopt($ch, CURLOPT_USERAGENT, $agent);
curl_setopt($ch, CURLOPT_URL,$post_url);
$result=curl_exec($ch);
var_dump($result);
exit;