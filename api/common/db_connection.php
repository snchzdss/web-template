<?php

    date_default_timezone_set('Asia/Manila');
    $servername = '172.25.114.171\SQLEXPRESS';
    $username = 'sa';
    $password = 'SystemGroup2018';
    $database = 'dessa_template';

    try {
        $conn = new PDO("sqlsrv:Server=$servername;Database=$database", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Database connected successfully.";
    } catch (PDOException $e) {
        echo 'NO CONNECTION' . $e->getMessage();
    }
