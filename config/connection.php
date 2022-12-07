<?php 
    require_once './HocPHP/www/DoAn-master/config/config.php';
    try {
        $pdo = new PDO("mysql:host=".HOST.";dbname=".DB_NAME."",DB_USER,DB_PASS);
        $pdo->query("set names utf8");
    } catch (PDOException $e) {
        echo $e->getMessage();
        echo "Kết nối thất bại: " . $e->getMessage();
    }
?>