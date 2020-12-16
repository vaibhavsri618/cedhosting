<?php

session_start();
require 'classes/Dbconnect.php';
require 'classes/user.php';
if(!isset($_SESSION['cart']))
{
    $_SESSION['cart']=array();
}
   

if(isset($_GET['cartid']))
{
    $id=$_GET['cartid'];
    $user=new user();
    $dbconnect=new Dbconnect();
    $row5=$user->cartdata($id,$dbconnect->conn);
    
    

    foreach($row5 as $key=>$val)
    {

        $name=$val['prod_name'];
        $monprice=$val['mon_price'];
        $annualprice=$val['annual_price'];
        $sku=$val['sku'];
        $desc=$val['description'];
        $parentid=$val['prod_parent_id'];
       


    }
    $arr=json_decode($desc,true);
    $domain=$arr['free'];
    $mail=$arr['mail'];
    $band=$arr['band'];
    $lang=$arr['lang'];
    $web=$arr['webspace'];
   
    $cart=array("name"=>$name,"monprice"=>$monprice,"annualprice"=>$annualprice,
    "sku"=>$sku,"domain"=>$domain,"mail"=>$mail,"band"=>$band,"lang"=>$lang,"web"=>$web);

    array_push($_SESSION['cart'],$cart);

    //print_r($_SESSION['cart']);

    echo "<script>alert('Product Added Successfully')
    window.location='catpage.php?catid=$parentid'</script>";
    
  
}

?>