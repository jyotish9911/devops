<?php

$name = $_GET['bid'];
echo $name;

$bookingid = $bid;
//$bookingid = '1111';
$bookingURL = "https://api.oyorooms.com/v2/wifi_management/validate_booking?booking_id=$bookingid";


$ch = curl_init();
curl_setopt($ch,CURLOPT_HTTPHEADER, array('access_token:c0g5bUhKQjJBcW5DcUxRNm0yS246OWpxYmFxSExjQUpNYmtRWDlUWUQ='));
curl_setopt($ch,CURLOPT_URL, $bookingURL);
curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch,CURLOPT_CONNECTTIMEOUT ,10);
$result = curl_exec($ch);
$response = array();
if(curl_errno($ch))
{
        $response['status'] = -10;
        $response['data'] = '';
        $response['message'] = "Login Error Timeout. Please Try Again.";
}
curl_close($ch);
//$response = json_decode($result);

//print_r($result);
//echo json_decode($result,JSON_PRETTY_PRINT);

echo $result
?>
