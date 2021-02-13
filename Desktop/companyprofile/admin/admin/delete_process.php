<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once "./models/Crud.php";
$object = new Crud();
$id_val = $_GET["id"];
$query = $object->delete("process","id",$id_val);
if($query) {
    echo "
    <script>
        window.location='?page=process';
    </script>
    ";
}
?>