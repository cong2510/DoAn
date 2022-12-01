<?php
    session_start();
    if(isset($_SESSION['cart']))
    {
        $id=$_GET['id'];
        $tam=$_GET['tam'];
        foreach($_SESSION['cart'] as $key => $values)
        {
            if($values[0] == $id)
            {
                if($tam == "false")
                {
                    $values[5] = $values[5] + 1;
                    $_SESSION['cart'][$key] = $values;
                }
                else
                {
                    $values[5] = $values[5] - 1;
                    $_SESSION['cart'][$key] = $values;
                }
                break;
            }
        }
        header('location: giohang.php');
    }
    
?>
