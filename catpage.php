
<div class="content">

<?php

if (isset($_GET['catid'])) {
    require 'header.php';

    require 'classes/user.php';

    $id = $_GET['catid'];

    $user = new user();
    $dbconnect = new Dbconnect();
    $row1 = $user->catpage($id, $dbconnect->conn);
    if (isset($row1)) {
        foreach ($row1 as $key => $row) {
            echo $row['html'];

        }

    }

    ?>



<div class="tab-prices">
						<div class="container">
							<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
								<ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
									<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">IN Hosting</a></li>
									</ul>
								<div id="myTabContent" class="tab-content">
									<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
										<div class="linux-prices" id="price">

                                        <?php

    $row5 = $user->catpagedata($id, $dbconnect->conn);
    if (isset($row5)) {
        foreach ($row5 as $key => $val) {

            ?>
											<div class="col-md-3 linux-price">
												<div class="linux-top">
												<h4><?php echo $val['prod_name']; ?></h4>
												</div>
												<div class="linux-bottom">
													<h5 style="border-bottom:1px solid #e7663f">$<?Php echo $val['mon_price']; ?> <span class="month">per month</span></h5>

                                                    <h5>$<?Php echo $val['annual_price']; ?> <span class="month">per year</span></h5>

                                                    <?php

														$desc = $val['description'];
														$arr = json_decode($desc, true);

														?>

													<h6><?php echo $arr['free']; ?> Domain</h6>
													<ul>
													<li><strong>Web Space :</strong><?php echo $arr['webspace']; ?></li>
													<li><strong>and Width :</strong><?php echo $arr['band']; ?></li>
													<li><strong>Language :</strong><?php echo $arr['lang']; ?></li>
													<li><strong>Free Mail :</strong><?php echo $arr['mail']; ?></li>
												    <li><strong>SKU :</strong><?php echo $val['sku']; ?></li>
													<li><strong>location</strong> : <img src="images/india.png"></li>
													</ul>
												</div>

												<a href="" class="btn btn-default btn-rounded mb-4"
                    								data-toggle="modal" data-target="#modalForm<?php echo $val['prod_id']; ?>">Buy Now</a>


<div class="modal fade" id="modalForm<?php echo $val['prod_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Add To Cart</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="addtocart.php" method="post">
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
        <label data-error="wrong" data-success="right" for="defaultForm-email">Product Name</label>
          <input type="text" id="defaultForm-email" class="form-control validate" value="<?php echo $val['prod_name'] ?>" readonly name="prod_name">
		  <input type="hidden" name="hidden" value="<?php echo $val['prod_id'] ?>">
		  <input type="hidden" name="hidden1" value="<?php echo $id ?>">
        </div>





        <div class="md-form mb-4">

          <label data-error="wrong" data-success="right" for="defaultForm-pass">Plan</label>
          <select class="form-control validate" name="viewplan" required>
          <option value="" selected disabled hidden>Please Select Your Plan</option>

		  <option value="<?php echo $val['mon_price']; ?>">Monthly</option>
		  <option value="<?php echo $val['annual_price']; ?>">Annually</option>



          </select>


        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center ">
        <input type="submit" style="margin-right:230px" class="btn btn-success" id="btnaddtocart" value="Add to Cart" name="showaddtocart">
      </div>
      </form>
    </div>
  </div>
</div>


</div>

												<?php }
    }?>
											



										</div>
									</div>
								</div>
							</div>
						</div>
					</div>




                    <div class="clients">
					<div class="container">
						<h3>Some of our satisfied clients include...</h3>
						<ul>
							<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
							<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
							<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
							<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
							<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
						</ul>
					</div>
				</div>
       <!-- clients -->
	     <!-- Wordpress Features -->
					<div class="features">
						<div class="container">
                        <?php
$row1 = $user->catpage($id, $dbconnect->conn);

    foreach ($row1 as $key => $row) {
        echo '<h3>' . $row["prod_name"] . '</h3>';

    }
    ?>

							<div class="features-grids">
								<div class="col-md-4 features-grid">
									<img src="images/f1.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f2.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f3.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
								<div class="clearfix"></div>
							</div>
							<div class="features-grids">
								<div class="col-md-4 features-grid">
									<img src="images/f4.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f5.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
									<div class="col-md-4 features-grid">
										<img src="images/f6.png">
										<h4>Expert Web Design</h4>
										<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
									</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>


<?php

    require 'footer.php';
} else {
    echo '<script>alert("Please Suppy id");
            window.location="index.php"</script>';
}
?>