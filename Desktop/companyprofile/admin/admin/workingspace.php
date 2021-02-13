<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "./models/Crud.php";
$object = new Crud();
?>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Workingspace</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Workingspace</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header bg-secondary">
                                        <h3 class="card-title">Data Workingspace</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table table-bordered table-sm">
                                                <thead style="text-align:center;">
                                                    <tr>
                                                        <th scope="col" width="10">No</th>
                                                        <th scope="col" width="300">Workingspace</th>
                                                        <th scope="col" width="10">Aksi</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
                                                    $no = 1;
                                                    foreach ($object->tampilData("workingspace") as $data) {
                                                    ?>
                                                        <tr>
                                                            <th scope="row"><?= $no++; ?></th>
                                                            <td><?= $data["workingspace"]; ?></td>
                                                            <td>
                                                                <a href="?page=delete_workingspace&id=<?= $data["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini ?')" class="badge badge-warning">Delete</a>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header bg-secondary">
                                        <h3 class="card-title">Tambah Workingspace</h3>
                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                                <i class="fas fa-minus"></i>
                                            </button>
                                            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <?php
                                            $data = ["workingspace" => @$_POST["workingspace"]];
                                            $query = $object->tambahData("workingspace", $data);
                                            if ($query) {
                                                echo "
                                                <script>   
                                                    window.location='?page=workingspace';
                                                </script>
                                                ";
                                            }
                                            ?>
                                            <form action="" method="post">
                                                <div class="form-group">
                                                    <textarea name="workingspace" id="workingspace" cols="53" rows="5"></textarea>
                                                    <div class="card-footer bg-transparant">
                                                        <button type="submit" name="tambah" class="btn btn-primary float-right btn-sm">Tambah</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>