<?php 
    require_once '/php/DoAn/config/config.php';
    try {
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DB_NAME."",DB_USER,DB_PASS);
        $pdo->query("set names utf8");
        echo 'Ket noi thanh cong';
    } catch (PDOException $e) {
        echo $e->getMessage();
        echo "Kết nối thất bại: " . $e->getMessage();
    }
?>