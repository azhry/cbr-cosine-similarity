<!DOCTYPE html>
<html lang="en">
<?php
 if(!isset($_GET['module']) || $_GET['module']== '')
$_GET['module'] = 'home' ; 
?>


<?php
include "../koneksi.php";
include "../fungsi_like.php";
include "../time.php";

session_start();
if (!isset($_SESSION['username'])){
header ("location:../index.php");
}
?>
<head>


  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
      </a>

      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link">
          <i class="fas fa-fw fa-user"></i>
          <span>Level Akun : <?php echo $_SESSION['level']; ?></span></a>
      </li>
      <hr class="sidebar-divider my-0">
      
      <!-- Nav Item - Dashboard -->
      <li class="nav-item">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        System Menu
      </div>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-book"></i>
          <span>Knowledge Saya</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Knowledge:</h6>
            <a class="collapse-item" <?php if ($_GET['module'] == 'tacit' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=tacit">Tacit Saya</a>
            <a class="collapse-item" <?php if ($_GET['module'] == 'explicit' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=explicit">Explicit Saya</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsea" aria-expanded="true" aria-controls="collapsea">
          <i class="fas fa-fw fa-book"></i>
          <span>Knowledge Umum</span>
        </a>
        <div id="collapsea" class="collapse" aria-labelledby="headinga" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Knowledge:</h6>
            <a class="collapse-item" <?php if ($_GET['module'] == 'tacitumum' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=tacitumum">Knowledge Tacit</a>
            <a class="collapse-item" <?php if ($_GET['module'] == 'explicitumum' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=explicitumum">Knowledge Explicit</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span> Problem Solving</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Pilih Menu</h6>
             <a  <?php if ($_GET['module'] == 'problem' || $_GET['module'] == '') {?><?php } ?> href = "#" class ="collapse-item"> Problem Solving </i></a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsec" aria-expanded="true" aria-controls="collapsec">
          <i class="fas fa-fw fa-check"></i>
          <span>Validasi Knowledge</span>
        </a>
        <div id="collapsec" class="collapse" aria-labelledby="headingc" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Validasi :</h6>
            <a class="collapse-item" <?php if ($_GET['module'] == 'valid_tacit' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=valid_tacit">Validasi Tacit</a>
            <a class="collapse-item" <?php if ($_GET['module'] == 'valid_explicit' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=valid_explicit">Validasi Explicit</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsef" aria-expanded="true" aria-controls="collapsef">
          <i class="fas fa-fw fa-cogs"></i>
          <span>Knowledge Revise</span>
        </a>
        <div id="collapsef" class="collapse" aria-labelledby="headingf" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Revisi :</h6>
            <a class="collapse-item" <?php if ($_GET['module'] == 'revise_tacit' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=revise_tacit">Revisi Tacit</a>
            <a class="collapse-item" <?php if ($_GET['module'] == 'revise_explicit' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=revise_explicit">Revisi Explicit</a>
            <a class="collapse-item" <?php if ($_GET['module'] == 'revise_problem' || $_GET['module'] == '') {?> class="active" <?php } ?> href="#">Revisi Problem(SOON)</a>
          </div>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseb" aria-expanded="true" aria-controls="collapseb">
          <i class="fas fa-fw fa-gift"></i>
          <span>Reward</span>
        </a>
        <div id="collapseb" class="collapse" aria-labelledby="headingb" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Reward:</h6>
            <a class="collapse-item" <?php if ($_GET['module'] == 'pilihreward' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=pilihreward">Pilih Reward</a>
            <a class="collapse-item" <?php if ($_GET['module'] == 'rewardsaya' || $_GET['module'] == '') {?> class="active" <?php } ?> href="?module=rewardsaya">Reward Saya</a>
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
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" form name="formcari" method="post"  action="?module=detectcari">
            <div class="input-group">
              <input type="text" name ="query" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
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
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
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
            </li>
            <?php
            $sql = "SELECT * FROM tacit_knowledge join user on tacit_knowledge.NIP=user.NIP where tacit_knowledge.validasi='Belum Valid' order by tacit_knowledge.id_tacit desc";
            $query=mysqli_query($dbconnect,$sql);
            $count=mysqli_num_rows($query);
            ?>
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-users fa-fw"></i>
                <!-- Counter - Alerts -->
                <?php if($count == 0){ ?>
                <span class="badge badge-danger badge-counter"></span>
                <?php } else { ?>  
                <span class="badge badge-danger badge-counter"><?php echo $count ?></span>
                <?php } ?>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Knowledge Tacit Alerts
                </h6>
                <?php
                while ($data = mysqli_fetch_array($query)){
                ?>
                <a class="dropdown-item d-flex align-items-center" href="?module=alert_tacit&id_tacit=<?php echo $data['id_tacit']; ?>">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo time_since(strtotime($data['tanggal'])); ?></div>
                    <span class="font-weight-bold">Tacit Knowledge Atas Nama <?php echo $data['nama']; ?> Dengan NIP : <?php echo $data['NIP']; ?> Menunggu Divalidasi...</span>
                  </div>
                </a>
              
                <?php }?>
              </div>
            </li>

            <?php
            $sql1 = "SELECT * FROM explicit join user on explicit.NIP=user.NIP where explicit.validasi='Belum Valid' order by explicit.id_explicit desc";
            $query1=mysqli_query($dbconnect,$sql1);
            $count1=mysqli_num_rows($query1);
            ?>
            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-book fa-fw"></i>
                <!-- Counter - Alerts -->
                <?php if($count1 == 0){ ?>
                <span class="badge badge-danger badge-counter"></span>
                <?php } else { ?>  
                <span class="badge badge-danger badge-counter"><?php echo $count1 ?></span>
                <?php } ?>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Knowledge Explicit Alerts
                </h6>
                <?php
                while ($data1 = mysqli_fetch_array($query1)){
                ?>
                <a class="dropdown-item d-flex align-items-center" href="?module=alert_explicit&id_explicit=<?php echo $data1['id_explicit']; ?>">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500"><?php echo time_since(strtotime($data1['tanggal'])); ?></div>
                    <span class="font-weight-bold">Explicit Knowledge Atas Nama <?php echo $data1['nama']; ?> Dengan NIP : <?php echo $data1['NIP']; ?> Menunggu Divalidasi...</span>
                  </div>
                </a>
              
                <?php }?>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['nama'];?></span>
               
                <img class="img-profile rounded-circle" src="<?php echo $_SESSION['foto']; ?>">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="?module=profil">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>   
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>

            </li>

          </ul>

        </nav>

        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
           
            
          </div>

       
   <?php require_once('module/'.$_GET['module'].'.php');?>
      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../index.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="../vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>
