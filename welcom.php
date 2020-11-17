<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Broom Express</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
 
<style>
  body{
    font-size: 10px;
  }
.bg-gradient-primary {
    background-color: #a03220;
    background-size: cover;
}
.accordion {
    margin-bottom: 77px;
    margin-left: auto;
}
.btn-group>.btn, .btn-group>.dropdown-menu, .btn-group>.popover {
    font-size: 10px;
}
label, input, button, select, textarea {
    font-size: 14px;
    font-weight: normal;
    line-height: 20px;
    font-family: math;
}
form.user .form-control-user {
    font-size: .8rem;
    border-radius: 10rem;
    padding: 0.5rem 1rem;
}
.btn{
      padding: 0.375rem .75rem;
}
.bg-white {
    background-color: #ffff00!important;
}

</style> 

</head>

<body id="page-top">
        
  <!-- Page Wrapper -->
  <div id="wrapper">
      
    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <div class="page-header">
            <h6>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome</h6>
        </div>
        </div>
       
      <p>
          <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
          <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
      </p>
        <div class="sidebar-brand-text mx-3">BEX<sup>2</sup></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

     


     
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">


        
        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              
              <!-- Dropdown - Messages -->
              <!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li> -->

            <!-- Nav Item - Alerts
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                 -->
              <!-- Dropdown - Alerts -->
              <!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

           
              -->
            
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#"><i class="fas fa-motorcycle"></i>Motorcycle</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fas fa-store"></i>Stores</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-truck"></i>Auto Service</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">300kg</a>
                <a class="dropdown-item" href="#">600kg</a>
                <a class="dropdown-item" href="#">1000kg</a>
                           </li>
           
          </ul>

          <div class="form-group">
            <label for="exampleInputEmail1"><i class="fas fa-location-arrow">Pick Up :</i></label>
            <input type="pickup" class="form-control">
          </div>

          <div class="form-group">
            <label for="DropOff"><i class="fas fa-street-view">Drop Off :</i></label>
            <input type="dropoff" class="form-control">
          </div>


          <label for="Extramiles"><b>Extra Miles :</b></label>

          <div class="form-group">
              <input class="form-check-input" type="checkbox">  ---- Pabili / Abono / Buy Me
              <div class="invalid-feedback">Check this checkbox to continue.</div>
            </label>
          </div>

          
          <div class="form-group">
            <input class="form-check-input" type="checkbox">  ---- Fragile / Expensive Items
            <div class="invalid-feedback">Check this checkbox to continue.</div>
          </label>
        </div>
          <!-- Page Heading -->
<!-- 
        <ul class="nav nav-pills">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Motorcycle</a>
                </li>
                 <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Stores</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">...</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Auto Service</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">300kg</a>
                    <a class="dropdown-item" href="#">600kg</a>
                    <a class="dropdown-item" href="#">1000kg</a>
                    
                  </div>
                </li>
               
                
              </ul>
            <br><br>

             <span class="label label-warning">Pick Up :</span>
              <div class="form-group"><br>
                <input type="text" class="form-control" id="inputAddress">
              </div>
           
             <span class="label label-warning">Drop Off :</span>
                 <div class="form-group"><br>
                   <input type="text" class="form-control" id="Drop off1" placeholder="Dropoff 1">
                 </div>
                <div class="form-group">
                   <input type="text" class="form-control" id="Drop off2" placeholder="Dropoff 2">
                 </div>
           
            <span class="label">Extra Miles :</span>
            <br><br>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions"  id="inlineRadio1" value="option1">
              <label class="form-check-label" for="inlineRadio1">Pabili / Abono / Buy Me</label>
            </div><br>
          <div class="form-check form-check-inline">
              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
              <label class="form-check-label" for="inlineRadio2">Fragile / Expensive Items</label>
          </div>

          <br><br>
          <div class="btn-group">
            <button type="button" class="btn btn-warning">READY!<br>POLICY</button>
            <button type="button" class="btn btn-warning">SET!<br>CHOOSE TIME</button>
            <button type="button" class="btn btn-warning">GO!<br>BOOK NOW</button>
             <button type="button" class="btn btn-warning">NOTE<br>ME!</button>
          </div>
 -->
          </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
