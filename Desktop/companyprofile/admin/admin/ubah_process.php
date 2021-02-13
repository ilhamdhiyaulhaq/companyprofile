<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "./models/Crud.php";
$object = new Crud();
$id = $_GET["id"];
foreach ($object->tampilData("process", $id) as $data) {
    $id = $data["id"];
    $discover = $data["discover"];
    $define = $data["define"];
    $design = $data["design"];
    $develop = $data["develop"];
    $deploy = $data["deploy"];
    $deliver = $data["deliver"];
}
if (isset($_POST["simpan"])) {
    $data = [
        "discover= '" . $_POST["discover"] . "'",
        "define= '" . $_POST["define"] . "'",
        "design= '" . $_POST["design"] . "'",
        "develop= '" . $_POST["develop"] . "'",
        "deploy= '" . $_POST["deploy"] . "'",
        "deliver= '" . $_POST["deliver"] . "'"
    ];
    $qury = $object->update("process", $data, "id", $id);
    if ($qury) {
        echo "
        <script>
            window.location='?page=process';
        </script>
        ";
    }
}
?>
<style>
    .tombol {
        margin-left: 5px;
    }
</style>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <!-- Default box -->
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="card-title">Ubah Process</h3>

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
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="row">
                                        <div class="col-lg">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?= $id; ?>">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="discover">Discover</label>
                                                        <textarea name="discover" id="discover" value="<?= $discover; ?>"><?= $discover; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="define">Define</label>
                                                        <textarea name="define" id="define" value="<?= $define; ?>"><?= $define; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="design">Design</label>
                                                        <textarea name="design" id="design" value="<?= $design; ?>"><?= $design; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="develop">Develop</label>
                                                        <textarea name="develop" id="develop" value="<?= $develop; ?>"><?= $develop; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="deploy">Deploy</label>
                                                        <textarea name="deploy" id="deploy" value="<?= $deploy; ?>"><?= $deploy; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="deliver">Deliver</label>
                                                        <textarea name="deliver" id="deliver" value="<?= $deliver; ?>"><?= $deliver; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="simpan" class="btn btn-info  float-right tombol">Simpan</button>
                                    <input sec="" type="submit" name="cancel" class="btn btn-danger  float-right tombol" value="Cancel">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>
</section>
<script>
    CKEDITOR.replace('discover');
    CKEDITOR.replace('define');
    CKEDITOR.replace('design');
    CKEDITOR.replace('develop');
    CKEDITOR.replace('deploy');
    CKEDITOR.replace('deliver');
</script>