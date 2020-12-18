<?php

session_start();
require 'classes/Dbconnect.php';
require 'classes/user.php';
if(!isset($_SESSION['cart']) && !isset($_SESSION['cartshow']))
{
    $_SESSION['cart']=array();
    $_SESSION['cartshow']=array();
}
    
   

if(isset($_POST['showaddtocart']))

{
    

    $name11="";
    $plan=$_POST['viewplan'];
    $name1=$_POST['prod_name'];
    
    $hidden=$_POST['hidden'];
    foreach ($_SESSION['cartshow'] as $key=>$val)
    {
        if($name1==$val['name'])
        {
            $name11=$name1;
            echo "<script>alert('Similar Product Already added')
    window.location='index.php'</script>";
    
        }

    }
    if($name1!=$name11)
    {
    
    $user=new user();
    $dbconnect=new Dbconnect();
    $row5=$user->cartdata($hidden,$dbconnect->conn);
    
    

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
    $cartshow=array("name"=>$name1,"plan"=>$plan);
   

    array_push($_SESSION['cart'],$cart);
    array_push($_SESSION['cartshow'],$cartshow);

   

    echo "<script>alert('Product Added Successfully')
    window.location='catpage.php?catid=$parentid'</script>";
    
  
}
}

?>