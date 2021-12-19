<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8002',
    'timeout' => 5
]);
$url =  $_SERVER["REQUEST_URI"];
$url =$_GET['id'];
$id = $url;
$response =  $client->request('DELETE', '/api/laptop/'.$id.'');
$body = $response->getBody();
header('location:laptop.php');
//var_dump($data_body['data']);


?>