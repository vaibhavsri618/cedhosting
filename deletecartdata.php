<?php

session_start();
if(isset($_GET['delid']))
{
    $id=$_GET['delid'];
    unset($_SESSION['cartshow'][$id]);

    
    echo "<script>alert('Product Deleted from the cart Successfully')
    window.location='cart.php'</script>";
}
?>