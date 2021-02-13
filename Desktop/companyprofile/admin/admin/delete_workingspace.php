<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(E_ALL);
require_once "./models/Crud.php";

$objcet = new Crud();
$id = $_GET["id"];
$query = $objcet->delete("workingspace", "id", $id);
if($query) {
    echo"
    <script>
        window.location='?page=workingspace';
    </script>
    ";
}
?>