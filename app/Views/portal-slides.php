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
                    <!-- <h1 class="h3 mb-4 text-gray-800">Slides</h1> -->

                    <div class="row">
                        <div class="col-lg-8">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Materi K3</h6>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-10" style="min-height: 360px;">
                                            <div class="h_iframe">
                                                <iframe id="k3-player" src="https://docs.google.com/presentation/d/e/2PACX-1vTPiE9OnWiKIiC0x0Jj2_1uQeZ4adPRhnpVfa48ogxblZ6D7Kivf9zzvXWP9f1oPQ/embed?start=false&loop=false&delayms=3000" frameborder="0" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <ul class="nav flex-column" id="k3-playlist">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="k3-gempa"><small>Gempa Bumi</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="k3-MFR"><small>MFR OK</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="k3-MKKG"><small>MKKG</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="k3-skenario"><small>Skenario STAN</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="k3-apiapar"><small>API & APAR</small></a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#" id="k3-videosimul"><small>Video Simulasi</small></a>
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
                    $('#k3-playlist').removeClass('flex-column');
                    $('#k3-playlist').addClass('justify-content-center');
                    var transltX = '210vw';
                }

                // k3-playlist
                $('#k3-gempa').click(function(){
                    $('#k3-player').attr('src', 'https://docs.google.com/presentation/d/e/2PACX-1vTPiE9OnWiKIiC0x0Jj2_1uQeZ4adPRhnpVfa48ogxblZ6D7Kivf9zzvXWP9f1oPQ/embed?start=false&loop=false&delayms=3000');
                });

                $('#k3-MFR').click(function(){
                    $('#k3-player').attr('src', 'https://docs.google.com/presentation/d/e/2PACX-1vSRlIlo-5k-O29fXuB6sRs2Xm9q0KsJs1I4LS-xiL_GKO7Ut3QcuwV_pC-APBMFTQ/embed?start=false&loop=false&delayms=3000');
                });

                $('#k3-MKKG').click(function(){
                    $('#k3-player').attr('src', 'https://docs.google.com/presentation/d/e/2PACX-1vQO2k7_po9PnweRCRRIsUts2UhS_qWt-eed5KWRJHTf5GHHIdBw-JbWBlABk380_w/embed?start=false&loop=false&delayms=3000');
                })

                $('#k3-skenario').click(function(){
                    $('#k3-player').attr('src', 'https://docs.google.com/presentation/d/e/2PACX-1vSH-KVY1Rv6AJY0QTzEnfFdmksKzVXWmNASC6nC7iKmp6GeD9QxNaxkCQ-HvhD5xw/embed?start=false&loop=false&delayms=3000');
                });

                $('#k3-apiapar').click(function(){
                    $('#k3-player').attr('src', 'https://docs.google.com/presentation/d/e/2PACX-1vSoHqLQjVLJGrVAsChpHdoz5H0s9ksWzmqy5ngl6VgltH3C6EF9dh-qP0v5QBqKtg/embed?start=false&loop=false&delayms=3000');
                });

                $('#k3-videosimul').click(function(){
                    $('#k3-player').attr('src', 'https://drive.google.com/file/d/1g_7AsWjfpciKQjWD13TTTdgLjtyDcIYF/preview');
                })
            </script>

</body>
</html>