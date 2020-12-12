<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<?php

session_start();
if (isset($_SESSION['userdata'])) {
if ($_SESSION['userdata']['name']=="admin") {


?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="assets/img/brand/favicon.png" type="image/png">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">

  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <!-- <a class="navbar-brand" href="javascript:void(0)"> -->
          <!-- <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
          <h1 class="navbar-brand"><a href="index.php"><span style="color: #585CA7;font-size:30px">Ced</span> <span style="color: #e7663f;font-size:30px">Hosting</span></a></h1>
						
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link">
                                <i class="ni ni-app text-orange"></i>
                                <span class="nav-link-text">Products</span>
                            </a>
                        </li>
                        <ul class="nav-item">
                            <a class="nav-link" href="category.php">
                                <i class="ni ni-pin-3 text-primary"></i>
                                <span class="nav-link-text">Create category</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="addproduct.php">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Add Product</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="viewproduct.php">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">View Product</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Create New offers</span>
                            </a>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-bullet-list-67 text-default"></i>
                                <span class="nav-link-text">Orders</span>
                            </a>
                        </li>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Pending Orders</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Completed Orders</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Cancelled Orders</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Generate Invoice</span>
                            </a>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-key-25 text-info"></i>
                                <span class="nav-link-text">Services</span>
                            </a>
                        </li>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Active Services</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Expired Services</span>
                            </a>
                        </ul>



                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-circle-08 text-pink"></i>
                                <span class="nav-link-text">Users</span>
                            </a>
                        </li>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">All Users List</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Create New User</span>
                            </a>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-book-bookmark text-dark"></i>
                                <span class="nav-link-text">Blog</span>
                            </a>
                        </li>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Add New Blog</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">View all Blogs</span>
                            </a>
                        </ul>
                        <li class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-settings-gear-65 text-dark"></i>
                                <span class="nav-link-text">Accounts</span>
                            </a>
                        </li>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Update Company Info</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Change Security Question</span>
                            </a>
                        </ul>
                        <ul class="nav-item">
                            <a class="nav-link" href="">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Change Password</span>
                            </a>
                        </ul>
                    </ul>
 </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->
          <form class="navbar-search navbar-search-light form-inline mr-sm-3" id="navbar-search-main">
            <div class="form-group mb-0">
              <div class="input-group input-group-alternative input-group-merge">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="fas fa-search"></i></span>
                </div>
                <input class="form-control" placeholder="Search" type="text">
              </div>
            </div>
            <button type="button" class="close" data-action="search-close" data-target="#navbar-search-main" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </form>
          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>
            <li class="nav-item d-sm-none">
              <a class="nav-link" href="#" data-action="search-show" data-target="#navbar-search-main">
                <i class="ni ni-zoom-split-in"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-bell-55"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-xl  dropdown-menu-right  py-0 overflow-hidden">
                <!-- Dropdown header -->
                <div class="px-3 py-3">
                  <h6 class="text-sm text-muted m-0">You have <strong class="text-primary">13</strong> notifications.</h6>
                </div>
                <!-- List group -->
                <div class="list-group list-group-flush">
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-1.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-2.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-3.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>5 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Your posts have been liked a lot.</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-4.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>2 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">Let's meet at Starbucks at 11:30. Wdyt?</p>
                      </div>
                    </div>
                  </a>
                  <a href="#!" class="list-group-item list-group-item-action">
                    <div class="row align-items-center">
                      <div class="col-auto">
                        <!-- Avatar -->
                        <img alt="Image placeholder" src="assets/img/theme/team-5.jpg" class="avatar rounded-circle">
                      </div>
                      <div class="col ml--2">
                        <div class="d-flex justify-content-between align-items-center">
                          <div>
                            <h4 class="mb-0 text-sm">John Snow</h4>
                          </div>
                          <div class="text-right text-muted">
                            <small>3 hrs ago</small>
                          </div>
                        </div>
                        <p class="text-sm mb-0">A new issue has been reported for Argon.</p>
                      </div>
                    </div>
                  </a>
                </div>
                <!-- View all -->
                <a href="#!" class="dropdown-item text-center text-primary font-weight-bold py-3">View all</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ni ni-ungroup"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-lg dropdown-menu-dark bg-default  dropdown-menu-right ">
                <div class="row shortcuts px-4">
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-red">
                      <i class="ni ni-calendar-grid-58"></i>
                    </span>
                    <small>Calendar</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-orange">
                      <i class="ni ni-email-83"></i>
                    </span>
                    <small>Email</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-info">
                      <i class="ni ni-credit-card"></i>
                    </span>
                    <small>Payments</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-green">
                      <i class="ni ni-books"></i>
                    </span>
                    <small>Reports</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-purple">
                      <i class="ni ni-pin-3"></i>
                    </span>
                    <small>Maps</small>
                  </a>
                  <a href="#!" class="col-4 shortcut-item">
                    <span class="shortcut-media avatar rounded-circle bg-gradient-yellow">
                      <i class="ni ni-basket"></i>
                    </span>
                    <small>Shop</small>
                  </a>
                </div>
              </div>
            </li>
          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <img alt="Image placeholder" src="assets/img/theme/team-4.jpg">
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold">

                    <?php

                    echo $_SESSION['userdata']['name'];
                    ?>


                    </span>
                  </div>
                </div>
              </a>
              <div class="dropdown-menu  dropdown-menu-right ">
                <div class="dropdown-header noti-title">
                  <h6 class="text-overflow m-0">Welcome!</h6>
                </div>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-single-02"></i>
                  <span>My profile</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-settings-gear-65"></i>
                  <span>Settings</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-calendar-grid-58"></i>
                  <span>Activity</span>
                </a>
                <a href="#!" class="dropdown-item">
                  <i class="ni ni-support-16"></i>
                  <span>Support</span>
                </a>
                <div class="dropdown-divider"></div>
                <a href="../Logout.php" class="dropdown-item">
                  <i class="ni ni-user-run"></i>
                  <span>Logout</span>
                </a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>


<?php

    } else {

        echo "<script>alert('Cant Access Admin Profile')
        window.location='../Logout.php'</script>";
    }
    } else {

      echo '<a href="../login.php">Please login first</a>';
      header("Location:../index.php");
    }




?>