<?php
    require('models/conexion.php');

    $con = new Conexion();
    $post = $con->getPost();
?>