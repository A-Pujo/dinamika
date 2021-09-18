<?= view('__portal-header') ?>
    <style>
        .h_iframe iframe {
            width:100%;
            height:100%;
        }
        .h_iframe {
            height: 100%;
            width:100%;
        }
    </style>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-4 text-gray-800">Videos</h1> -->

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengenalan Manajemen</h6>
                                </div>
                                <div class="card-body" style="height: 360px;">
                                    <div class="h_iframe">
                                        <iframe src="https://www.youtube.com/embed/gTblDEnT3bM" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Budaya Kampus</h6>
                                </div>
                                <div class="card-body" style="height: 360px;">
                                    <div class="h_iframe">
                                        <iframe src="https://www.youtube.com/embed/gTblDEnT3bM" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Pengenalan Prodi</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-10" style="min-height: 480px;">
                                            <div class="h_iframe">
                                                <iframe id="prodip-player" src="https://www.youtube.com/embed/NGKFIEuIyPw" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <ul class="nav flex-column" id="prodip-playlist">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="prodip-d4map"><small>DIV MAP</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="prodip-d4asp"><small>DIV ASP</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="prodip-d4mkn"><small>DIV MKN</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="prodip-d3pajakap"><small>DIII PAJAK AP</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="prodip-d3akunap"><small>DIII Akuntansi AP</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="prodip-d3bcap"><small>DIII BC AP</small></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?= view('__portal-footer') ?>

            <script>
                let isMobile = window.matchMedia("only screen and (max-width: 600px)").matches;

                if (isMobile) {
                    //Conditional script here
                    $('#prodip-playlist').removeClass('flex-column');
                    $('#prodip-playlist').addClass('justify-content-center');
                    var transltX = '210vw';
                }

                // playlist
                $('#prodip-d4map').click(function(){
                    $('#prodip-player').attr('src', 'https://www.youtube.com/embed/NGKFIEuIyPw');
                });

                $('#prodip-d4asp').click(function(){
                    $('#prodip-player').attr('src', 'https://www.youtube.com/embed/o8bK3xklAeY');
                });

                $('#prodip-d4mkn').click(function(){
                    $('#prodip-player').attr('src', 'https://www.youtube.com/embed/XAGLHGxZlxM');
                });

                $('#prodip-d3pajakap').click(function(){
                    $('#prodip-player').attr('src', 'https://www.youtube.com/embed/q2w0b6K_iPs');
                });

                $('#prodip-d3akunap').click(function(){
                    $('#prodip-player').attr('src', 'https://www.youtube.com/embed/HACDcvBWfxU');
                });

                $('#prodip-d3bcap').click(function(){
                    $('#prodip-player').attr('src', 'https://www.youtube.com/embed/8kK7VBuyeHI');
                });

                $('.nav-link[id*=prodip-d]').click(function(e){
                    e.preventDefault();
                });
            </script>
</body>
</html>