<?php
ini_set('display_errors', 1);
echo date("H:i:s");
$c = curl_init();
curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($c, CURLOPT_HTTPHEADER, array('Accept: application/json', 'Content-Type: application/json'));
curl_setopt($c, CURLOPT_URL, 'http://data.mtgox.com/api/2/BTCUSD/money/ticker');

$data = curl_exec($c);
curl_close($c);

$obj = json_decode($data);

$z= print_r($obj->{'data'}->{'avg'}->{'display_short'}."\n", true);
echo ' es de: <h2 style="font-color: #00c300;">'.$z.'</h2>';
?>
