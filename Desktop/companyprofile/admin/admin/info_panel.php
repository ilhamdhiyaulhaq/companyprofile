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
                <h1 class="m-0">Info Panel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Info Panel</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="card-title">Info Panel</h3>
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
                            <table class="table table-bordered">
                                <thead style="text-align:center;">
                                    <tr>
                                        <th scope="col" width="10">No</th>
                                        <th scope="col" width="300">Who Are We</th>
                                        <th scope="col" width="300">Our Mission</th>
                                        <th scope="col" width="300">What We Do</th>
                                        <th colspan="2">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($object->tampilData("info_panel") as $data) {
                                    ?>
                                        <tr>
                                            <th scope="row"><?= $no++; ?></th>
                                            <td><?= $data["whoAreWe"]; ?></td>
                                            <td><?= $data["ourMission"]; ?></td>
                                            <td><?= $data["whatWeDo"]; ?></td>
                                            <td>
                                                <a href="?page=update_info_panel&id=<?= $data["id"];?>" class="badge badge-success">Update</a>
                                            </td>
                                            <td>
                                                <a href="?page=delete_info_panel&id=<?= $data["id"]; ?>" onclick="return confirm('Yakin ingin menghapus data ini ?')" class="badge badge-warning">Delete</a>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>