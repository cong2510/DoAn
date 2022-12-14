<?php
include "./config/connection.php";
if (isset($pdo)) {
    $sql = "select * from sanpham";
    $pdo->query("set names 'utf8'");
    $result = $pdo->prepare($sql);
    $result->execute();
    $item = array();


    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $item[] = $row;
    }
}

?>


<style>
    /* Danh sach san pham */

    #wrapper {
        max-width: 1170px;
        margin: 0 auto;
        padding-bottom: 50px;
        border-bottom: 2px solid #333;
    }

    .headline {
        text-align: center;
        margin: 40px 0px;
    }

    .headline h3 {
        font-size: 18px;
        color: #555;
        padding: 10px 20px;
        text-transform: uppercase;
        border: 1px solid #bebebe;
        display: inline-block;
        font-weight: 600;
    }

    ul.products {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    ul.products li {
        flex-basis: 25%;
        padding-left: 15px;
        padding-right: 15px;
        box-sizing: border-box;
        margin-bottom: 30px;
        font-size: 14px;
    }

    ul.products li img {
        width: 100%;
        height: 250px;
        object-fit: cover;
    }

    ul.products li .product-top .product-thump {
        display: block;
    }

    ul.products li .product-top .product-thump img {
        display: block;

    }

    ul.products li .product-top a.addCart {
        text-decoration: none;
        text-transform: uppercase;
        text-align: center;
        display: block;
        background-color: black;
        color: #fff;
        padding: 10px 0;
        width: 100%;
    }

    ul.products li .product-info a {
        display: block;
        text-decoration: none;
    }

    
</style>

<div id="wrapper">
    <div class="headline">
        <h3>Sản phẩm bán chạy</h3>
    </div>
    <ul class="products">
        <?php
        foreach ($item as $key => $value) {
            echo
            "<li>
            <div class='product-item'>
                <div class='product-top'>
                    <a href='#' class='product-thump'>
                        <img src='./public/images/sanpham/", $value['AnhSP'], "' >
                    </a>
                    <form action='themsanpham.php' method='post'>
                        <input type='number' name='sl' value='",1,"' style='width=100%; max-width: 50px; ' >
                        <input type='hidden' name='id' value='", $value['MaSP'], "'>
                        <input type='hidden' name='img' value='", $value['AnhSP'], "'>
                        <input type='hidden' name='loaisp' value='", $value['LoaiSP'], "'>
                        <input type='hidden' name='name' value='", $value['TenSP'], "'>
                        <input type='hidden' name='gia' value='", $value['Gia'], "'>
                        <input type='submit' name='addtocart' value='Thêm vào giỏ' style='background-color: Crimson; color: white; padding:5px;'>
                    </form>
                </div>
                <div class='product-info'>
                    <a href='#' class='product-cat'>", $value['LoaiSP'], "</a>
                    <a href='#' class='product-name'>", $value['TenSP'], "</a>
                    <div class='product-price'>", $value['Gia'], "</div>
                </div>
            </div>
        </li>";
        }
        ?>

    </ul>
</div>