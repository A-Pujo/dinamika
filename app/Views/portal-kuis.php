<!DOCTYPE html>
        <?= view('__portal-header') ?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Kartu Kuismu</h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>Kuis</div>
                                            <a href="<?= base_url('quiz/mulai') ?>" class="btn btn-sm btn-info">Mulai</a>
                                        </div>
                                    </ul>
                                    <ul class="list-group list-group-flush">
                                        <?php foreach($hasil as $h) : ?>
                                        <div class="list-group-item d-flex justify-content-between align-items-center">
                                            <div>Percobaan <?= $h->percobaan_ke ?></div>
                                            <div class="btn btn-info"><?= $h->nilai ?></div>
                                        </div>
                                        <?php endforeach; ?>
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