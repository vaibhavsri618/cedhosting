<?php

require 'header.php';
if(isset($_SESSION['cart']))
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
                    <th scope="col" class="sort" data-sort="budget">Product Price(Monthly)</th>
                    <th scope="col" class="sort" data-sort="status">Product Price(Annually)</th>
                    <th scope="col">SKU</th>
                    <th scope="col" class="sort" data-sort="completion">Free Domain</th>
                    <th scope="col">Band Width</th>
                    <th scope="col">Webspace</th>
                    <th scope="col">Language Support</th>
                    <th scope="col">Mail</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody class="list">
                
                      <?php 
                      
                      foreach($_SESSION['cart'] as $key=>$val)
                      {
                          
                    
                      
                      ?>
                        <tr>
                    <th scope="row">
                      <div class="media align-items-center"><?php
                      echo $val['name'];?>
                       
                      </div>
                    </th>
                    <td class="budget text-center">
                      $<?php echo $val['monprice'] ?>
                    </td>
                    <td class="budget text-center">
                      $<?php echo $val['annualprice'] ?>
                    </td>
                    <td>
                      
                       <?php echo $val['sku'] ?>
                     
                    </td>
                    <td class="text-center">
                     
                       <?php
                            echo $val['domain'];
                       ?>
                      
                    </td>
                    <td class="text-center">
                      
                        <?php echo $val['band'] ?>
                      
                    </td>
                    <td class="text-center">
                     
                      <?php
                            echo $val['web']
                      ?>
                       
                     
                    </td>

                    <th scope="row">
                      <div class="media align-items-center"><?php
                      echo $val['lang'];?>
                       
                      </div>
                    </th>

                    <th scope="row">
                      <div class="media align-items-center"><?php
                      echo $val['mail'];?>
                       
                      </div>
                    </th>

                    <td class="text-right">
                      
                          <a class="btn btn-danger" href="deletecartdata.php?delid=<?php echo $key?>">Delete</a>
                          
                      
                    </td>
                  </tr>
                  <?php

                      }?>
                  </tbody>
              </table>
            <div class="text-center">
              <a href="#" class="btn btn-success">Check out</a>
                    </div>
            </div>
           

<?php
}
?>
<h1 class='text-center'>Oops!..Cart is empty</h1>
<?php
require 'footer.php';
                    

?>