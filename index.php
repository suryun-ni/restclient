<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8001',
    'timeout' => 5
]);

$response =  $client->request('GET', '/api/hp');
$body = $response->getBody();
$data_body = json_decode($body, true);



$client_laptop = new Client([
    'base_uri' => 'http://127.0.0.1:8002',
    'timeout' => 5
]);

$response_laptop =  $client_laptop->request('GET', '/api/laptop');
$body_laptop = $response_laptop->getBody();
$data_body_laptop = json_decode($body_laptop, true);
//var_dump($data_body['data']);




?>

<html>

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <!-- datatable -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <!-- end datatable -->
    	
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip();
            $('#tabel-undangan').DataTable();
        });
    </script>

<body>
<nav class="navbar navbar-expand-lg navbar navbar-dark bg-primary">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.php">REST CLIENT</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item">
        <a class="nav-link" href="hp.php">Handphone</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="laptop.php">Laptop</a>
      </li>
     
    </ul>
   
  </div>
</nav>


<div class="card text-center">
  <div class="card-header">
    
  </div>
  <div class="card-body">
    <h5 class="card-title">Selamat Datang di Rest Client</h5>
    <p class="card-text">19650094/Tengku Surya Al-Furqan/Prak Sister G</p>
    <a href="hp.php" class="btn btn-primary">Menuju HP</a>
    <a href="laptop.php" class="btn btn-primary">Menuju Laptop</a>
  </div>
</div>


<div class="text-center">
    <h4>Contoh Tampilan</h4>
</div>
<div class="text-center">
    <h5>Handphone</h5>
</div>


<div class="container">
        <div class="col-lg-12">
            <div class="row">

           
            <?php foreach ($data_body as $data) : ?>
            <div class="col-lg-4 col-md-4 col-sm-4" >
            
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $data['gambar']; ?> " class="card-img-top" alt="...">
                <div class="card-body">
             <p class="card-text"><?php echo $data['nama']; ?></p>                                
                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
</div>

<div class="text-center">
    <h5>Laptop</h5>
</div>

<div class="container">
        <div class="col-lg-12">
            <div class="row">

           
            <?php foreach ($data_body_laptop as $data_laptop) : ?>
            <div class="col-lg-4 col-md-4 col-sm-4" >
            
                <div class="card" style="width: 18rem;">
                <img src="<?php echo $data_laptop['gambar_laptop']; ?> " class="card-img-top" alt="...">
                <div class="card-body">
             <p class="card-text"><?php echo $data_laptop['nama_laptop']; ?></p>                                
                </div>
                </div>
            </div>
            <?php endforeach ?>
        </div>
</div>

</body>

</html>