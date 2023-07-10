<?php
    include "connection.php";
    if(isset($_GET['npm'])){
        $npm = $_GET['npm'];
        $sql = "DELETE from `mahasiswa` where npm=$npm";
        $conn->query($sql);
    }
    header('index.php');
    exit;
?>