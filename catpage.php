
<div class="content">

<?php

if(isset($_GET['catid']))
{
	require 'header.php';

	require 'classes/user.php';

    $id=$_GET['catid'];

    $user=new user();
    $dbconnect=new Dbconnect();
    $row1=$user->catpage($id,$dbconnect->conn);
    if(isset($row1)) 
    {
    foreach($row1 as $key=>$row)
    {
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

                                         $row5=$user->catpagedata($id,$dbconnect->conn);
										if(isset($row5))
										{
                                         foreach($row5 as $key=>$val)
                                         {

                                        ?>
											<div class="col-md-3 linux-price">
												<div class="linux-top">
												<h4><?php echo $val['prod_name']; ?></h4>
												</div>
												<div class="linux-bottom">
													<h5 style="border-bottom:1px solid #e7663f">$<?Php echo $val['mon_price'];?> <span class="month">per month</span></h5>
                                                    
                                                    <h5>$<?Php echo $val['annual_price']; ?> <span class="month">per year</span></h5>

                                                    <?php 
                                                    
                                                    $desc=$val['description'];
                                                    $arr=json_decode($desc,true);
                                                  
                                         
                                                    
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
												<a href="#">buy now</a>
												<?php }
												}?>
											</div>
                                           
                                        
										
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
                        $row1=$user->catpage($id,$dbconnect->conn);
						
						foreach($row1 as $key=>$row)
						{
							echo '<h3>'.$row["prod_name"].'</h3>';
							
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
} else
{
	echo '<script>alert("Please Suppy id");
            window.location="index.php"</script>';
}
?>