<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Dinamika</title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>
<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url('portal') ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Portal</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Materi
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('portal/slides') ?>">
                    <i class="fab fa-slideshare"></i>
                    <span>Slides</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('portal/videos') ?>">
                    <i class="fas fa-photo-video"></i>
                    <span>Videos</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Mini-Kuis
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('portal/kuis') ?>">
                    <i class="fas fa-star-half-alt"></i>
                    <span>Kuis</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Survey
            </div>

            <li class="nav-item">
                <a class="nav-link" href="<?= base_url('portal/survey') ?>">
                    <i class="fas fa-poll-h"></i>
                    <span>Survey</span></a>
            </li>
            
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url() ?>">
                    <i class="fas fa-arrow-circle-left"></i>
                    <span>Halaman Awal</span></a>
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

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= user()->nama_maba ?></span>
                                <img class="img-profile rounded-circle"
                                    src="https://img.icons8.com/bubbles/100/000000/user.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url('akun/ganti-password') ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Ganti Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?= base_url('akun/logout') ?>" onclick="confirm('Apa anda yakin untuk keluar?')">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Keluar
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Survei Ketersediaan</h6>
                                </div>
                                <div class="card-body">
                                    <?= form_open(base_url('portal/survey-submit')) ?>
                                        <div class="mb-3">
                                            <label class="form-label">Ya gk?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_1" value="1">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_1" value="0">
                                                <label class="form-check-label">
                                                    Gk
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Ya gk sesi 2?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_2" value="1">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_2" value="0">
                                                <label class="form-check-label">
                                                    Gk
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Ya gk yang ke-3?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_3" value="1">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_3" value="0">
                                                <label class="form-check-label">
                                                    Gk
                                                </label>
                                            </div>
                                        </div>

                                        <?php if($attempt < 1) : ?>
                                        <button class="btn btn-success" type="submit">Submit</button>
                                        <?php endif; ?>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Rekap Survei</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Pilihan 1</th>
                                            <th>Pilihan 2</th>
                                            <th>Pilihan 3</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($sheet as $sh) : ?>
                                                <?php if($sh->no_reg == user()->no_reg) : ?>
                                                    <tr>
                                                        <td><?= $sh->pil_1 ?></td>
                                                        <td><?= $sh->pil_2 ?></td>
                                                        <td><?= $sh->pil_3 ?></td>
                                                    </tr>
                                                <?php endif; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Dinamika x Staner.id 2021</span>
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

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

</body>
</html>