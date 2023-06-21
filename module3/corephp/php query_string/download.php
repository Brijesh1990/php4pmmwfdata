<?php 
if(isset($_GET['dwnid']))
{

    $path="photo.jpg";
    header("Content-Type: application/octet-stream");
    header('Content-Disposition: attachment; filename=' . $path);
    readfile($path);

}
?>