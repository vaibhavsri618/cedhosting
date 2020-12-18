<?php



require 'header.php';

require '../classes/Dbconnect.php';

require '../classes/Product.php';


?>

 








    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Tables</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="index.php"><i class="fas fa-home"></i></a></li>
                 
                  <li class="breadcrumb-item active" >Product</li>
                  <li class="breadcrumb-item active" aria-current="page">Category</li>
                </ol>
              </nav>
            </div>
            
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
    <div class="col-lg-11 ml-lg-5 col-md-8">
          <div class="card bg-secondary border-0">
            <div class="card-header bg-transparent pb-5">
              
             <h3 class="text-center">Add Category</h3>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              
              <form role="form" action="Productmid.php" method="Post">

              <div class="form-group">
                  <div class="input-group input-group-merge 
                  input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <select class="form-control" name="select">
                   

                    <?php
                      $product=new Product();
                      $dbconnect=new Dbconnect();

                      $row1=$product->fetchcategory($dbconnect->conn);
                    if (isset($row1)) {
                       


                          

                    
                    
                ?>
                 <option value=1>Hosting
                    </option>
                    <?php
                            
                        
                    }
                    ?>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <div class="input-group input-group-merge 
                  input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control" name="name" 
                    placeholder="Name" type="text" id="catname"  required><br>
                   
                  </div>
                  <p id="catoname12" style="color:red"></p>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge 
                  input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></span>
                    </div>
                    <input class="form-control"
                     placeholder="HTML" type="text" name="link">

                     <!-- <textarea  name="link"></textarea> -->
                  </div>
                </div>
                
                <div class="text-center">
                  <input type="submit" 
                  class="btn btn-primary mt-4" name="submit5" id="submit11" value="Add Category">
                </div>
              </form>
            </div>
          </div>
        </div>

    
            <!-- Card header -->
            

     
      <div class="row">
        <div class="col">
          <div class="card ">
          <div class="card-header border-0">
              <h3 class="mb-0">Light table</h3>
            </div>
            <div class="table-responsive">
            <table class="table align-items-center table-flush" id="Table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Id</th>
                    <th scope="col" class="sort" 
                    data-sort="budget">Parent Product</th>
                    <th scope="col" class="sort" 
                    data-sort="status">Category Name </th>
                    <th scope="col">HTML</th>
                    <th scope="col">Category Available</th>
                    <th scope="col" class="sort" 
                    data-sort="completion">Category Launch Date</th>
                    <th scope="col">Action</th>
                   
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                $product=new Product();
                $dbconnect=new Dbconnect();

                $row1=$product->fetchcategory($dbconnect->conn);
                if (isset($row1)) {
                    foreach ($row1 as $key=>$row) {

                        if ($row['id']!=1) {

                      


                    
                    
                ?>
                  <tr>
                    <th scope="row">
                        <?php echo $row['id']; ?>
                    </th>
                    <td class="budget">
                    <?php $id12=$row['prod_parent_id'];
                    $p=$product->viewparent($dbconnect->conn,$id12);
                    $row11=$p->fetch_assoc();

                   
                        echo $row11['prod_name'];?>
                    </td>
                    <td>
                    <?php echo $row['prod_name']; ?>
                     
                    </td>
                    <td>
                    <textarea>
                    <?php 
                    if ($row['html']=="") {
                        $link="Null";
                    } else {
                        $link=$row['html'];

                    }

                    echo $link;
                    
                    ?>
                    </textarea>
                      
                    </td>
                    <td>

                    

                    <?php if($row['prod_available']==1)
                    {
                      $avai="Available";
                    } else
                    $avai="Unavailable";

                    echo $avai;
                    ?>
                      
                    </td>
                    <td class="text-right">
                    <?php echo $row['prod_launch_date']; ?>
                    </td>
                    <td>
                    <div class="text-center">
                    <a href="" class="btn btn-default btn-rounded mb-4" 
                    data-toggle="modal" data-target="#modalForm<?php echo $row['id']; ?>">Edit</a>
                    <a href="Productmid.php?id5=<?php echo $row['id'] ?>" class="btn btn-warning btn-rounded mb-4" 
                    >Delete</a>
                    </div>
                    </td>
                  </tr>

 <div class="modal fade" id="modalForm<?php echo $row['id'];?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Update data</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="Productmid.php" method="post">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <label data-error="wrong" data-success="right" for="defaultForm-email">Parent Name</label>
          <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $row11['prod_name'] ?>" readonly name="updateparent">
          <input type="hidden" name="hidden" value="<?php echo $row['id']?>">
        </div>

        <div class="md-form mb-5">
        <label data-error="wrong" data-success="right" for="defaultForm-email">Product Name</label>
          <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $row['prod_name'] ?>" name="updatename" required>
         
        </div>


        <div class="md-form mb-4">
          <label data-error="wrong" data-success="right" for="defaultForm-pass">HTML</label>
          <!-- <input type="text" id="defaultForm-pass" class="form-control validate" name="updatelink" value="<?php echo $link ?>" required> -->
         <textarea type="text" id="defaultForm-pass" class="form-control validate" name="updatelink" value="<?php echo $link ?>"></textarea>
        </div>

        <div class="md-form mb-4">
          <?php
          if($row['prod_available']==1)
          {
            $avail="Available";
          }
          else
          $avail="Unavailable"
          ?>
          <label data-error="wrong" data-success="right" for="defaultForm-pass">Available</label>
          <select class="form-control validate" name="updateavailable">
          <option value="<?php echo $row['prod_available']?>"><?php echo $avail?></option>
          <?php

          if($avail=="Available") {
            ?>
            <option value="2">Unavailable</option>

            <?php
          }
            else
            {
            ?>
            <option value="1">Available</option>

            <?php


          }
          ?>
          </select>


        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <input type="submit" class="btn btn-default" id="Update" value="Update" name="update">
      </div>
      </form>
    </div>
  </div>
</div>


                <?php 
                        }
                    }
                }?>
                  </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
  </div>
  </div>
  </div>
  </div>



    


<?php

require 'footer.php';

?>





