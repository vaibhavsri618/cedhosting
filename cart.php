<?php

require 'header.php';
if(isset($_SESSION['cart']) && isset($_SESSION['cartshow']))
{

?>

<h1 style="text-align:center"><?php 

if(isset($_SESSION['userdata']))
{
echo "Welcome ".$_SESSION['userdata']['name']."";
}

?> Your Cart is </h1>



<div class="table-responsive mb-5">
              <table class="table align-items-center table-flush">
                <thead class="thead-light" id="Table">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Product Name</th>
                    <th scope="col" class="sort" data-sort="budget">Product Price(Plan)</th>
                   
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                
                      <?php 
                      $total=0;
                      
                      foreach($_SESSION['cartshow'] as $key=>$val)
                      {
                          
                    
                      
                      ?>
                        <tr>
                    <th scope="row">
                      <div class="media align-items-center"><?php
                      echo $val['name'];?>
                       
                      </div>
                    </th>
                    <td class="budget">
                      $<?php echo $val['plan'] ?>
                    </td>
                    <td class="text">
                      
                          <a class="btn btn-danger" href="deletecartdata.php?delid=<?php echo $key?>">Delete</a>
                          
                      
                    </td>
                  </tr>
                  <?php
                      $total=$total+$val['plan'];
                      }
                      ?>
                     
                      <tr>
                      <td>Total</td>

                      <td><b>$<?php echo $total ?></b></tr>
                  </tbody>
              </table>
            <div class="text-center">
              <a href="checkout.php" class="btn btn-success">Check out</a>
                    </div>
            </div>
           

<?php
} else{
?>

<h1 class='text-center'>Oops!..Cart is empty</h1>
<?php
}
?>
<div style="margin-top:100px">
<?php
require 'footer.php';
?>
<div>                    

