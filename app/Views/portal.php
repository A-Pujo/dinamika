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
    <link rel="stylesheet" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.css">
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
                                    <h6 class="m-0 font-weight-bold text-primary">Acara Hari Ini</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Judul Acara</th>
                                            <th>Mulai</th>
                                            <th>Selesai</th>
                                            <th>Link Zoom</th>
                                            <th>Presensi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($acara as $a) : ?>
                                            <tr>
                                                <td><?= $a->nama_acara ?></td>
                                                <td><?= $a->mulai_acara ?></td>
                                                <td><?= $a->selesai_acara ?></td>
                                                <?php foreach($room as $r): ?>
                                                    <?php if($r->id_acara == $a->id_acara) : ?>
                                                    <td><a href="<?= $r->link_room ?>" class="btn btn-link" target="_blank">Link</a></td>
                                                    <?php endif; ?>
                                                <?php endforeach; ?>
                                                <td><a href="<?= base_url('presensi/acara/'.$a->id_acara) ?>" class="btn btn-info btn-sm"><i class="fas fa-file-signature"></i></a></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Rekap Presensimu</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered">
                                        <thead>
                                            <th>Judul Acara</th>
                                            <th>Waktu Presensi</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($presensi as $p) : ?>
                                            <tr>
                                                <td><?= $p->nama_acara ?></td>
                                                <td><?= $p->waktu_presensi ?></td>
                                            </tr>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Lanjutkan Petualanganmu!</h6>
                                </div>
                                <div class="card-body">
                                    <div class="py-5 px-3 d-flex flex-column justify-content-center align-items-center">
                                        <img id="map" src="<?= base_url('assets/images/map.png') ?>" class="w-100" usemap="#image-map">
                                        <map name="image-map">
                                            <area target="" alt="" title="" href="" coords="215,210,36" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                                            <area target="" alt="" title="" href="" coords="528,88,33" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                                            <area target="" alt="" title="" href="" coords="394,702,34" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                                            <area target="" alt="" title="" href="" coords="741,475,36" shape="circle" data-bs-toggle="modal" data-bs-target="#modal">
                                        </map>
                                    </div>  
                                </div>
                            </div>
                        </div> -->

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Coba Download File</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item"><a href="<?= base_url('uploads/file/text.pdf') ?>" download>Nah ini</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Maba</h6>
                                </div>
                                <div class="card-body">
                                    <table class="table table-striped" id="data-table">
                                        <thead>
                                            <th>No Reg</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                            <th>Jenis</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($maba as $m) : ?>
                                                <tr>
                                                    <td><?= $m->no_reg ?></td>
                                                    <td><?= $m->nama_maba ?></td>
                                                    <td><?= $m->prodi ?></td>
                                                    <td><?= $m->jenis ?></td>
                                                </tr>
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

    <script src="//cdn.datatables.net/1.11.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.9.0/main.min.js"></script>

    <script>
        /*! Image Map Resizer (imageMapResizer.min.js ) - v1.0.10 - 2019-04-10
        *  Desc: Resize HTML imageMap to scaled image.
        *  Copyright: (c) 2019 David J. Bradshaw - dave@bradshaw.net
        *  License: MIT
        */

        !function(){"use strict";function r(){function e(){var r={width:u.width/u.naturalWidth,height:u.height/u.naturalHeight},a={width:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-left"),10),height:parseInt(window.getComputedStyle(u,null).getPropertyValue("padding-top"),10)};i.forEach(function(e,t){var n=0;o[t].coords=e.split(",").map(function(e){var t=1==(n=1-n)?"width":"height";return a[t]+Math.floor(Number(e)*r[t])}).join(",")})}function t(e){return e.coords.replace(/ *, */g,",").replace(/ +/g,",")}function n(){clearTimeout(d),d=setTimeout(e,250)}function r(e){return document.querySelector('img[usemap="'+e+'"]')}var a=this,o=null,i=null,u=null,d=null;"function"!=typeof a._resize?(o=a.getElementsByTagName("area"),i=Array.prototype.map.call(o,t),u=r("#"+a.name)||r(a.name),a._resize=e,u.addEventListener("load",e,!1),window.addEventListener("focus",e,!1),window.addEventListener("resize",n,!1),window.addEventListener("readystatechange",e,!1),document.addEventListener("fullscreenchange",e,!1),u.width===u.naturalWidth&&u.height===u.naturalHeight||e()):a._resize()}function e(){function t(e){e&&(!function(e){if(!e.tagName)throw new TypeError("Object is not a valid DOM element");if("MAP"!==e.tagName.toUpperCase())throw new TypeError("Expected <MAP> tag, found <"+e.tagName+">.")}(e),r.call(e),n.push(e))}var n;return function(e){switch(n=[],typeof e){case"undefined":case"string":Array.prototype.forEach.call(document.querySelectorAll(e||"map"),t);break;case"object":t(e);break;default:throw new TypeError("Unexpected data type ("+typeof e+").")}return n}}"function"==typeof define&&define.amd?define([],e):"object"==typeof module&&"object"==typeof module.exports?module.exports=e():window.imageMapResize=e(),"jQuery"in window&&(window.jQuery.fn.imageMapResize=function(){return this.filter("map").each(r).end()})}();
        //# sourceMappingURL=imageMapResizer.map

        $('map').imageMapResize();

        $(document).ready(function(){
            $('#data-table').DataTable();
        });
    </script>
</body>
</html>