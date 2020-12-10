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
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Tables</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Tables</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header border-0">
              <h3 class="mb-0">Light table</h3>
            </div>
            <!-- Light table -->
            <div class="table-responsive">
              <table class="table align-items-center table-flush" id="Table">
                <thead class="thead-light">
                  <tr>
                    <th scope="col" class="sort" data-sort="name">Id</th>
                    <th scope="col" class="sort" data-sort="budget">Parent Product Id</th>
                    <th scope="col" class="sort" data-sort="status">Product Name </th>
                    <th scope="col">Link</th>
                    <th scope="col">Product Available</th>
                    <th scope="col" class="sort" data-sort="completion">Product Launch Date</th>
                   
                  </tr>
                </thead>
                <tbody class="list">
                <?php
                $product=new Product();
                $dbconnect=new Dbconnect();

                $row1=$product->fetchcategory($dbconnect->conn);
                if (isset($row1)) {
                    foreach ($row1 as $key=>$row) {

                    
                }
                ?>
                  <tr>
                    <th scope="row">
                      <?php echo $row['id']; ?>
                    </th>
                    <td class="budget">
                    <?php echo $row['prod_parent_id']; ?>
                    </td>
                    <td>
                    <?php echo $row['prod_name']; ?>
                     
                    </td>
                    <td>

                    <?php if($row['link']=="") {
                        $link="Null";
                    }
                    else
                    $link=$row['link'];

                    echo $link;
                    ; ?>
                      
                    </td>
                    <td>

                    <?php echo $row['prod_available']; ?>
                      
                    </td>
                    <td class="text-right">
                    <?php echo $row['prod_launch_date']; ?>
                    </td>
                  </tr>
            <?php } ?>
                  </tbody>
              </table>
            </div>
            <!-- Card footer -->
            <div class="card-footer py-4">
              <nav aria-label="...">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">
                      <i class="fas fa-angle-left"></i>
                      <span class="sr-only">Previous</span>
                    </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#">
                      <i class="fas fa-angle-right"></i>
                      <span class="sr-only">Next</span>
                    </a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    





<?php

require 'footer.php';

?>

<script>


$(document).ready( function () {
    $('#Table').DataTable();
} );
</script>



