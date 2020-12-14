<?php


require '../classes/Dbconnect.php';
require '../classes/Product.php';

if (isset($_POST['submit5'])) {

    $name=isset($_POST['name'])?$_POST['name']:"";
    $select=isset($_POST['select'])?$_POST['select']:"";
    $link=isset($_POST['link'])?$_POST['link']:"";
    

    $pro=new Product();
    $dbconnect=new Dbconnect();
    $row=$pro->addcategory($name, $select, $link, $dbconnect->conn);
    
}
if(isset($_POST['update']))
{
    $name=isset($_POST['updatename'])?$_POST['updatename']:"";
    $select=isset($_POST['updateavailable'])?$_POST['updateavailable']:"";
    $link=isset($_POST['updatelink'])?$_POST['updatelink']:"";
    $hidden=$_POST['hidden'];
    

    // echo $hidden;

    
    $pro=new Product();
    $dbconnect=new Dbconnect();
    $row=$pro->updatecategory($name, $select, $link, $hidden, $dbconnect->conn);





}

if(isset($_GET['id5'])) {


    $id=$_GET['id5'];

    echo $id;

    $pro=new Product();
    $dbconnect=new Dbconnect();
    $row=$pro->deletecategory($id, $dbconnect->conn);



}

if(isset($_POST['submit10']))
{

    $name=isset($_POST['name'])?$_POST['name']:"";
    $select=isset($_POST['select'])?$_POST['select']:"";
    $link=isset($_POST['url'])?$_POST['url']:"";
    $price1=$_POST['price1'];
    $price2=$_POST['price2'];

    $sku=$_POST['sku'];
    $webspace=$_POST['webspace'];
    $band=$_POST['band'];

    $free=$_POST['free'];
    $lang=$_POST['lang'];
    $mail=$_POST['mail'];

    if($name=="" || $select=="" || $price1=="" || $price2=="" || $sku=="" || $webspace=="" || $band==""
    ||$free==""|| $lang==""||$mail=="") {

        echo"<script>
        
        alert('Field Cant be empty')
        window.location='addproduct.php';
        </script>";


    }



    $pro=new Product();
    $dbconnect=new Dbconnect();
    $row=$pro->addproduct($name, $select, $link, $dbconnect->conn);

    $arr=array("webspace"=>$webspace,
                "band"=>$band,
                "free"=>$free,
                "lang"=>$lang,
                "mail"=>$mail

    
    
);

$json_arr=json_encode($arr);


$row1=$pro->addfinalproduct($row, $price1, $price2, $dbconnect->conn, $sku, $json_arr);




    



}

if(isset($_POST['updateproduct']))
{
    $updateparent=$_POST['updateparent'];
    $updatename=isset($_POST['updatename'])?$_POST['updatename']:"";
    $updateavailable=isset($_POST['updateavailable'])?$_POST['updateavailable']:"";
    $link=isset($_POST['updatelink'])?$_POST['updatelink']:"";
    $hidden=($_POST['hidden']);
   
    $updatemonthly=$_POST['updatemonthly'];
    $updateannual=$_POST['updateannual'];

    $updatesku=$_POST['updatesku'];
    $updatewebspace=$_POST['updatewebspace'];
    $updateband=$_POST['updateband'];

    $updatefree=$_POST['updatefree'];
    $updatelang=$_POST['updatelang'];
    $updatemail=$_POST['updatemail'];


    $pro=new Product();
    $dbconnect=new Dbconnect();
    $row=$pro->updateproduct($updateparent,$updatename, $updateavailable, $link, $hidden,$dbconnect->conn);
   
    
  

    $arr=array("webspace"=>$updatewebspace,
                "band"=>$updateband,
                "free"=>$updatefree,
                "lang"=>$updatelang,
                "mail"=>$updatemail

    
    
);

$json_arr=json_encode($arr);


$row1=$pro->updatefinalproduct($hidden, $updatemonthly, $updateannual, $dbconnect->conn, $updatesku, $json_arr);



    


}

if(isset($_GET['id15']))
{
    $id=$_GET['id15'];
    $pro=new Product();
    $dbconnect=new Dbconnect();
    $row=$pro->deleteproduct($id,$dbconnect->conn);
}

if(isset($_POST['name5']))
{
    $name=$_POST['name5'];
    $name=strtolower($name);

    $pro=new Product();
    $dbconnect=new Dbconnect();
    $row=$pro->countcat($name,$dbconnect->conn);

    if($row==1)
    {
        echo "Category name already present";
        
    }

}
?>