<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8001',
    'timeout' => 5
]);

$response =  $client->request('POST', '/api/hp',[
	'json' =>[
        'merk'=> $_POST['merk'],
	    'nama'=> $_POST['nama'],
	    'spesifikasi'=> $_POST['spesifikasi'],
	    'gambar'=> $_POST['gambar'],
	] 
]);
$body = $response->getBody();
header('location:hp.php');
//var_dump($data_body['data']);


?>