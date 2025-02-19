<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/2.0.2/css/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Menggunakan CDN untuk jQuery dan DataTables -->

    <script type="text/javascript" charset="utf8" src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>
    <script type="text/javascript" charset="utf8"
        src="https://cdn.datatables.net/2.0.2/js/dataTables.bootstrap4.js"></script>

    <script>
        // Mengaktifkan DataTable pada dokumen
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home">
                <div class="sidebar-brand-icon rotate-n-10">
                    <i class="fas fa-user-shield"></i>
                </div>
                <!-- <div class="sidebar-brand-text mx-3"> -->
                <!-- <i class="fas fa-fw fa-user-shield"></i></div> -->
            </a>

            <!-- Divider -->
            <!-- <hr class="sidebar-divider my-0"> -->

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Home') ?>">
                    <i class="fas fa-fw fa-home" style="font-size: 25px;"></i>
                    <span style="font-size: 15px;">Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kelola Data
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Admin') ?>">
                    <i class="fas fa-fw fa-user-shield" style="font-size: 25px;"></i>
                    <span style="font-size: 15px;">Data Admin</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Penduduk') ?>">
                    <i class="fas fa-fw fa-users" style="font-size: 25px;"></i>
                    <span style="font-size: 15px;">Data Penduduk</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Pendidikan') ?>">
                    <i class="fas fa-fw fa-graduation-cap" style="font-size: 25px;"></i>
                    <span style="font-size: 15px;">Data Pendidikan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Pekerjaan') ?>">
                    <i class="fas fa-fw fa-briefcase" style="font-size: 25px;"></i>
                    <span style="font-size: 15px;">Data Pekerjaan</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('umkm') ?>" style="font-size: 20px;">
                    <i class="fas fa-fw fa-store-alt" style="font-size: 25px;"></i>
                    <span style="font-size: 15px;">UMKM</span>
                </a>
            </li>




            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('Auth/logout') ?>" data-toggle="modal"
                    data-target="#logoutModal">
                    <i class="fas fa-fw fa-power-off" style="font-size: 25px;"></i>
                    <span style="font-size: 15px;">Keluar</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar)
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div> -->

            <!-- <footer class="sticky-footer bg-white" style="position: fixed; bottom: 0;"> -->
            <!-- <div class="container my-auto"> -->

            <!-- </div> -->

            <!-- </footer> -->

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
                    <h3 class="m-0 font-weight-bold text-primary"></h3>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="<?= base_url(); ?>assets/img/undraw_profile_2.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="Home">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    My Profile
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="Auth/logout" data-toggle="modal"
                                    data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
                <!--isi content-->
                <?php echo $contents ?>
                <!--end isi content-->

                <!-- Footer -->
                <!-- <footer class="sticky-footer bg-white" style="position: fixed; bottom: 0;">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; Padukuhan Krebet 2024</span>
                        </div>
                    </div>
                </footer> -->

                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->
        </div>

    </div>
    <!-- End of Page Wrapper -->
    <div class="copyright text-center my-auto" style="bottom: 0; color: blue; font-size: small;">
    <a href="https://si.almaata.ac.id/" style="color: blue; text-decoration: none;">Copyright &copy; Padukuhan Krebet 2024/Sistem Informasi</a>
</div>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>


    <!-- Logout Modal-->


    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin mau keluar?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Klik "Logout" jika kamu benar-benar ingin keluar dan mengakhiri sesi.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="Auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>



    <!-- Bootstrap core JavaScript-->
    <!-- <script src="<?= base_url(); ?>assets/vendor/jquery/jquery.min.js"></script> -->
    <script src="<?= base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->



</body>

</html>