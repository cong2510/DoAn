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

if (isset($_POST['xoa'])) {
    $xoa = $_POST['xoa'];
    $sql = "delete from sanpham where MaSP = :ma ";
    $arr = array(":ma" => $xoa);
    $result = $pdo->prepare($sql);
    $result->execute($arr);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="./public/css/admin.css">
    <title>Document</title>
</head>

<body>
    <div class="w3-sidebar w3-light-grey w3-bar-block" style="width:20%">
        <h3 class="w3-bar-item">Menu</h3>
        <a href="#" class="w3-bar-item w3-button">Quan ly san pham</a>
        <a href="#" class="w3-bar-item w3-button">Link 2</a>
        <a href="#" class="w3-bar-item w3-button">Link 3</a>
    </div>

    <!-- Page Content -->
    <div style="margin-left:20%">

        <div class="w3-container w3-teal">
            <h1>Shop</h1>
        </div>
        <div class="w3-container">
            <table border="1px">
                <tr>
                    <td>Ma</td>
                    <td>Ten</td>
                    <td>Loai</td>
                    <td>Thuong hieu</td>
                    <td>Mau sac</td>
                    <td>Kich co</td>
                    <td>Mo ta</td>
                    <td>Gia</td>
                </tr>
                <tr>
                    <?php foreach ($item as $key => $value) { ?>
                        <td><?php echo $value['MaSP']; ?></td>
                        <td><?php echo $value['TenSP']; ?></td>
                        <td><?php echo $value['LoaiSP']; ?></td>
                        <td><?php echo $value['ThuongHieu']; ?></td>
                        <td><?php echo $value['MauSac']; ?></td>
                        <td><?php echo $value['KichCo']; ?></td>
                        <td><?php echo $value['MoTa']; ?></td>
                        <td><?php echo $value['Gia']; ?></td>
                        <td>
                            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post"><button type="submit" name="xoa" value="<?php echo $value['MaSP']; ?>">Xóa</button></form>
                        </td>
                </tr>
            <?php } ?>
            </table>
        </div>

    </div>
</body>

</html>