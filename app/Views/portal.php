<?= view('__portal-header') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Halo <?= user()->nama_maba ?></h1>

    <div class="row">
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Perlengkapan Hari Ini</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?= base_url('uploads/file/text.pdf') ?>" download style="text-decoration: none;"><div class="d-flex justify-content-between"><div>Kelompok Hari Ini</div><div><i class="fas fa-users"></i></div></div></a></li>
                        <li class="list-group-item"><a href="<?= base_url('uploads/file/text.pdf') ?>" download style="text-decoration: none;"><div class="d-flex justify-content-between"><div>Handbook Dinamika</div><div><i class="fas fa-book"></i></div></div></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Rekap Zoom</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="https://www.youtube.com/c/PKNSTANKEMENKEU" target="_blank" style="text-decoration: none;"><div class="d-flex justify-content-between"><div>BAAK</div><div><i class="fab fa-rev"></i></div></div></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Dokumen Lain</h6>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="<?= base_url('uploads/file/text.pdf') ?>" download style="text-decoration: none;"><div class="d-flex justify-content-between"><div>Juknis Kesatria's Got Talent</div><div><i class="fas fa-route"></i></div></div></a></li>
                        <li class="list-group-item"><a href="<?= base_url('assets/images/Jingle-Challenge-min.png') ?>" target="_blank" style="text-decoration: none;"><div class="d-flex justify-content-between"><div>Poster Jingle Challenge</div><div><i class="far fa-file-image"></i></div></div></a></li>
                        <li class="list-group-item"><img class="w-100" src="<?= base_url('assets/images/Jingle-Challenge-min.png') ?>" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?= view('__portal-footer') ?>

</body>
</html>