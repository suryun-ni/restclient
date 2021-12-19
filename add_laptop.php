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
        <div class="container-xl">
            <div class="table-responsive">
                <div class="table-wrapper">
                    <div class="table-title">
                        <div class="row">
                            <div class="col-sm-5">
                                <h2>Tambah <b>Laptop</b></h2>
                            </div>
                            <div class="col-sm-7">
                                <a href="laptop.php" class="btn btn-secondary"><span class="material-icons-outlined">Kembali</span></a>
                            </div>
                        </div>
                    </div>
                    <form action="add_data_laptop.php" method="POST">
                        <div class="mb-3">
                            <label for="name_field" class="form-label">Merk Laptop</label>
                            <input type="text" class="form-control" id="name_field" name="merk_laptop" required>
                        </div>
                        <div class="mb-3">
                            <label for="name_field" class="form-label">Nama Laptop</label>
                            <input type="text" class="form-control" id="name_field" name="nama_laptop" required>
                        </div>
                        <div class="mb-3">
                            <label for="spesifikasi" class="form-label">Spesifikasi Laptop</label>
                            <textarea name="spesifikasi_laptop" id="spesifikasi_laptop" class="form-control" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="name_field" class="form-label">Gambar Laptop</label>
                            <input type="text" class="form-control" id="name_field" name="gambar_laptop" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>

    </body>
</html>