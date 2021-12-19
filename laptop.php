<?php

require __DIR__ . '/vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client([
    'base_uri' => 'http://127.0.0.1:8002',
    'timeout' => 5
]);

$response =  $client->request('GET', '/api/laptop');
$body = $response->getBody();
$data_body = json_decode($body, true);
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

</head>

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
    <div class="container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-5">
                            <h2>Daftar <b>Laptop</b></h2>
                        </div>
                        
                        <div class="col-sm-7">
                            <a href="add_laptop.php" class="btn btn-secondary"><span class="material-icons-outlined">Tambah Data</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover" id="tabel-undangan" style="width: 100%;">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Merk Laptop</th>
                            <th>Nama Laptop</th>
                            <th>Spesifikasi Laptop</th>
                            <th>Gambar Laptop</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;

                        foreach ($data_body as $data) :
                            //var_dump($data['jersey']);
                        ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['merk_laptop']; ?></td>
                                <td><?php echo $data['nama_laptop']; ?></td>
                                <td><?php echo $data['spesifikasi_laptop']; ?></td>
                                <td><?php echo  "<img src=' $data[gambar_laptop] ' width='70' height='90' />";?></td>
                                <td><a href="ubah_laptop.php?id=<?=$data['id']?>" role="button" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a></td>
		                    	<td><a href="hapus_data_laptop.php?id=<?=$data['id']?>" role="button" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')" ><i class="fa fa-remove " ></i></a></td>


                            </tr>
                        <?php
                        endforeach ?>
                    </tbody>
                </table>
            
            </div>
        </div>
    </div>

</body>

</html>