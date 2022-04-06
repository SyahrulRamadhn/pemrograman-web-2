<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
    
        <title>Halaman Dashboard</title>
    
        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    
        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
    
    <style type="text/css">/* Chart.js */
    @keyframes chartjs-render-animation{from{opacity:.99}to{opacity:1}}.chartjs-render-monitor{animation:chartjs-render-animation 1ms}.chartjs-size-monitor,.chartjs-size-monitor-expand,.chartjs-size-monitor-shrink{position:absolute;direction:ltr;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1}.chartjs-size-monitor-expand>div{position:absolute;width:1000000px;height:1000000px;left:0;top:0}.chartjs-size-monitor-shrink>div{position:absolute;width:200%;height:200%;left:0;top:0}
    body
    {
        color:#000000;
    }
    a
    {
        color:#000000;
    }
    </style>
    </head>

<body id="page-top" class="">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <li class="nav-item active">
                <a class="nav-link" href="halaman_read.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Halaman Read</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->
            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-primary topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form action="dashboard.php" method="post" class="form-inline">
                        <input name="cari" class="form-control mr-sm-2" type="search" placeholder="Cari..." aria-label="Search">
                        <input name="search" class="btn btn-success" type="submit" value="Cari">
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

                        <!-- Nav Item - Alerts -->
                        

                        <!-- Nav Item - Messages -->
                        

                        

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-white-600 small">SyrlRmdhn</span>
                                <img class="img-profile rounded-circle" src="img/Syahrul.jpg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
        <div class="row gy-4">
            <div class="col-md-12">
                <img src="https://img.icons8.com/external-flatart-icons-lineal-color-flatarticons/50/000000/external-alert-web-security-flatart-icons-lineal-color-flatarticons.png"/>
                Catatan: Masukkan kata kunci nama game atau kategori dalam melakuakan pencarian untuk mendapatkan hasil yang akurat.
            </div>
            <br>
            <br>
            <br>
            <p><a class="btn btn-primary" href="insert.php" role="button">Tambah Data</a></p>
            <br>
            
            <div class="col-md-12">
                <table class="table table-success table-striped color-dark">
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Game</th>
                        <th>Penerbit</th>
                        <th>Tahun Rilis</th>
                        <th>Kategori</th>		
                        <th>Ket</th>
                    </tr>
                <?php 
                //include file koneksi
                include "koneksi.php";
                //sql select
                $search = isset($_POST["search"]) ? $_POST["search"] : "";
                if($search)
                {
                    $cari = isset($_POST["cari"]) ? $_POST["cari"] : "";
                
                $sql = "SELECT id_data, nama_game, penerbit, kategori, tahun_rilis, gambar from data where nama_game like '%$cari%' or kategori like '%$cari%'";	
                }
                else {
                    $sql="SELECT * FROM DATA";
                }
                $nomor = 1;
                    
                $kueri = $koneksi->query($sql);
                if($kueri){
                    while($info = $kueri->fetch_array()){  
                        ?>
                    <tr>
                        <td><?php echo $nomor++; ?></td>
                        <?php echo "<td><img src='gambar/".$info['gambar']."' width='100' height='100'></td>";?>
                        <td><?php echo $info['nama_game']; ?></td>
                        <td><?php echo $info['penerbit']; ?></td>
                        <td><?php echo $info['tahun_rilis']; ?></td>
                        <td><?php echo $info['kategori']; ?></td>
                       <?php echo "<td><a href='edit.php?id=$info[id_data]'>Edit</a> |
                       <a href='#' data-toggle='modal' data-target='#deleteModal'>Delete</a>"
                       ?>
                       <?php
                       ?>
                       <div class="modal fade" id="deleteModal" role="dialog" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                       <div class="modal-dialog" role="document">
                           <div class="modal-content">
                           <div class="modal-header">
                               <h5 class="modal-title" id="deleteModal">Yakin Ingin Menghapus?</h5>
                               <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                               <span aria-hidden="true">×</span>
                               </button>
                           </div>
                           <div class="modal-body">
                               File Yang Dihapus Tidak Dapat dipulihkan. Yakin Hapus?
                           </div>
                           <div class="modal-footer">
                               <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                              <?php echo "<a class='btn btn-primary' href='delete.php?id=$info[id_data]''>Hapus</a>";?>
                           </div>
                           </div>
                       </div>
                   </div>
                       <?php
                       "</td>";?>
                    </tr>
                <?php
                    } 
                        }
                else{
                        echo "Gagal Menampilkan Data : ".$koneksi->error;
                    }
                ?>   
            </table>
            </div>

          

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright © SyrlRmdhn 2021</span>
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
                    <a class="btn btn-primary" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>




</body>

</html>