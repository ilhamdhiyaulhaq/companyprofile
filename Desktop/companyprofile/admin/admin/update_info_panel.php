<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once "../admin/models/Crud.php";
$object = new Crud();
$id = $_GET["id"];
foreach ($object->tampilData("info_panel", $id) as $tampil) {
    $id = $tampil["id"];
    $whoAreWe = $tampil["whoAreWe"];
    $ourMission = $tampil["ourMission"];
    $whatWeDo = $tampil["whatWeDo"];
}
if (isset($_POST["simpan"])) {
    $data = [
        "whoAreWe='" . $_POST["whoAreWe"] . "'",
        "ourMission='" . $_POST["ourMission"] . "'",
        "whatWeDo='" . $_POST["whatWeDo"] . "'"
    ];
    $query = $object->update("info_panel", $data, "id", $id);
    if($query) {
        echo "
        <script>
            window.location='?page=info_panel';
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
                <h1 class="m-0">Info Panel</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Info Panel v1</li>
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
                        <h3 class="card-title">Update Info Panel</h3>
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
                                <input type="hidden" name="id" value="<?= $tampil["id"]; ?>">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="whoAreWe">Who Are We</label>
                                                        <textarea name="whoAreWe" id="whoAreWe" value="<?= $whoAreWe; ?>"><?= $whoAreWe; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label for="ourMission">Our Mission</label>
                                                        <textarea name="ourMission" id="ourMission" value="<?= $ourMission; ?>"><?= $ourMission; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label for="whatWeDo">What We Do</label>
                                                        <textarea name="whatWeDo" id="whatWeDo" value="<?= $whatWeDo; ?>"><?= $whatWeDo; ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" name="simpan" class="btn btn-info  float-right tombol">Simpan</button>
                                    <a href="?page=info_panel" type="submit" name="cancel" class="btn btn-danger  float-right tombol" value="Cancel">Cancel</a>
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
    CKEDITOR.replace('whoAreWe');
    CKEDITOR.replace('ourMission');
    CKEDITOR.replace('whatWeDo');
</script>