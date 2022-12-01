<?php
    session_start();
    ob_start();
    if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
        $id=$_POST['id'];
        $img=$_POST['img'];
        $loai=$_POST['loaisp'];
        $name=$_POST['name'];
        $gia=$_POST['gia'];
        $sl=$_POST['sl'];

        $sp =array($id,$img,$loai,$name,$gia,$sl);

        if(!isset($_SESSION['cart'])) $_SESSION['cart']=array();
        array_push($_SESSION['cart'],$sp);    

        header('location: giohang.php');
    }
?>