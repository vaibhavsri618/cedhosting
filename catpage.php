<?php 

require 'header.php';

require 'classes/user.php';




if(isset($_GET['catid']))
{
    $id=$_GET['catid'];

    $user=new user();
    $dbconnect=new Dbconnect();
    $row1=$user->catpage($id,$dbconnect->conn);
    if(isset($row1))
    foreach($row1 as $key=>$row)
    {
        require_once ($row['html']);
        
    }


}

?>
<?php

require 'footer.php';

?>