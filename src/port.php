<?php

$host = $_GET['ip'];
$ports = array(21, 25, 80, 81, 110, 443, 3306);
$port = $_GET['porta'];

    $connection = @fsockopen($host, $port);

    if (is_resource($connection)){
        $array = array('server' => $host, 'port' => $port, 'status' => 'open');
        echo json_encode($array);
        fclose($connection);
    }else{
        $array = array('server' => $host, 'port' => $port, 'status' => 'closed');
        echo json_encode($array);
    }
