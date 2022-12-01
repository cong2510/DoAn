<?php
session_start();
if (isset($_SESSION['cart'])) {
    // echo var_dump($_SESSION['cart']);
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
        <link rel="stylesheet" href="./public/css/giohang.css">
        <link rel="stylesheet" href="./public/css/index.css">

        <title>Gio hang</title>
    </head>

    <body>
        <?php include "./include/header.php"; ?>
        <div class="small-container cart">
            <table>
                <tr style="font-size: 15px;">
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                </tr>
                <?php

                $i = 0;
                $total = 0;
                foreach ($_SESSION['cart'] as $key => $value) {
                    $thanhtien = $value[4] * $value[5];
                    $total += $thanhtien;
                    echo '<tr>
                    <td>
                    <div class="cart-info">
                        <img src="./public/images/sanpham/', $value[1], '">
                        <div style="font-size: 15px;">
                            <p>', $value[2], '</p>
                            <p>', $value[3], '</p>
                            <p>', $value[4], '</p>
                            <a href="xoagiohang.php?id=', $i, '">Xóa</a>
                        </div>
                    </div>
                </td>
                    <td>
                    <a href="capnhatsoluong.php?tam=true&id=',$value[0],'">-</a>
                    <span>',$value[5],'</span>
                    <a href="capnhatsoluong.php?tam=false&id=',$value[0],'">+</a>
                    </td>
                    <td style="font-size: 15px;">', $thanhtien, '</td>
                </tr>';
                    $i++;
                }

                ?>
            </table>
            <div class="total-price" style="font-size: 15px;">
                <table>
                    <tr>
                        <td>Total</td>
                        <td><?php echo $total; ?></td>
                    </tr>
                    <tr>
                    <td style="font-size: 15px;">
                            <p><a href="index.php">Tiếp tục đặt hàng</a></p>
                        </td>
                        <td>
                            <p><a href="xoagiohang.php">Xóa toàn bộ giỏ hàng</a></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php include "./include/footer.php"; ?>
    </body>

    </html>
<?php
} else {
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />
        <link rel="stylesheet" href="./public/css/index.css">
        <link rel="stylesheet" href="./public/css/giohang.css">

        <title>Gio hang</title>
    </head>

    <body>
        <?php include "./include/header.php"; ?>
        <div class="small-container cart">
            <table>
                <tr style="font-size: 15px;">
                    <th>Sản phẩm</th>
                    <th>Số lượng</th>
                    <th>Giá</th>
                </tr>
            </table>
            <h1 style="text-align: center;">Giỏ hàng rỗng. <a href="index.php" style="text-decoration: underline; color: blue;">Đặt hàng</a></h1>
            <div class="total-price">
                <table>
                    <tr style="font-size: 15px;">
                        <td>
                            <p><a href="index.php">Tiếp tục đặt hàng</a></p>
                        </td>
                        <td>
                            <p><a href="xoagiohang.php">Xóa toàn bộ giỏ hàng</a></p>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <?php include "./include/footer.php"; ?>
    </body>

    </html>
<?php
}
?>