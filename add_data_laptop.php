<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8002',
    'timeout' => 5
]);

$response =  $client->request('POST', '/api/laptop',[
	'json' =>[
        'merk_laptop'=> $_POST['merk_laptop'],
	    'nama_laptop'=> $_POST['nama_laptop'],
	    'spesifikasi_laptop'=> $_POST['spesifikasi_laptop'],
	    'gambar_laptop'=> $_POST['gambar_laptop'],
	] 
]);
$body = $response->getBody();
header('location:laptop.php');
//var_dump($data_body['data']);


?>