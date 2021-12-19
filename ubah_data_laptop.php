<?php
require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8002',
    'timeout' => 5
]);

$id = $_POST['id'];
$response =  $client->request('PUT', '/api/laptop/'.$id.'',[
	'query' =>[
        'merk_laptop'=> $_POST['merk_laptop'],
	    'nama_laptop'=> $_POST['nama_laptop'],
	    'spesifikasi_laptop'=> $_POST['spesifikasi_laptop'],
	    'gambar_laptop'=> $_POST['gambar_laptop'],
	] 
]);

// $response =  $client->request('PUT', '/api/hp/',$id,'?',
// 'merk=',$merk,'&','nama=' ,$nama,'&','spesifikasi=',$spesifikasi,'&','gambar=',$gambar);
// $body = $response->getBody();

$body = $response->getBody();
header('location:laptop.php');
//var_dump($data_body['data']);


?>