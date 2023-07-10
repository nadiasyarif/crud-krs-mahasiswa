<?php
    include "connection.php";
    if(isset($_GET['kodemk'])){
        $kodemk = $_GET['kodemk'];
        $sqll = "DELETE from `matakuliah` where kodemk='$kodemk'";
        $conn->query($sqll);
    }
    header('index.php');
    exit;
?>