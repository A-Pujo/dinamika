<?= view('__portal-header') ?>
        <!-- Begin Page Content -->
                <div class="container-fluid">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Acara <?= $acara->nama_acara ?></h6>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item bg-info text-black-50">Ruang</li>
                                        <li class="list-group-item"><a href="<?= $room->link_room ?>" target="_blank" style="text-decoration: none;">Link</a></li>
                                        <li class="list-group-item bg-info text-black-50">Waktu Mulai</li>
                                        <li class="list-group-item"><?= $acara->mulai_acara ?></li>
                                        <li class="list-group-item bg-info text-black-50">Selesai Acara</li>
                                        <li class="list-group-item"><?= $acara->selesai_acara ?></li>
                                        <li class="list-group-item bg-info text-black-50">Punya Pertanyaan?</li>
                                        <li class="list-group-item">
                                            <div class="input-group mb-3">
                                                <input type="text" class="form-control" name="pertanyaan">
                                                <button class="btn btn-outline-secondary" type="button" id="ajukan-pertanyaan">Ajukan</button>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Hadiri</h6>
                                </div>
                                <div class="card-body">
                                    <?php if(count($kehadiran) > 0) : ?>
                                        <p class="text-success text-center container">Sudah Tercatat</p>
                                        <ul class="list-group">
                                            <li class="list-group-item bg-info text-black-50">Waktu Presensi</li>
                                            <li class="list-group-item"><?= $kehadiran[0]['waktu_presensi'] ?></li>
                                            <li class="list-group-item bg-info text-black-50">Password</li>
                                            <li class="list-group-item"><?= $kehadiran[0]['password'] ?></li>
                                            <li class="list-group-item bg-info text-black-50">Resume</li>
                                            <li class="list-group-item"><?= $kehadiran[0]['resume'] ?></li>
                                        </ul>
                                    <?php else : ?>
                                        <?= form_open(base_url('presensi/submit/'.$acara->id_acara), ['method' => 'post']) ?>
                                            <div class="mb-3">
                                                <label class="form-label">Password</label>
                                                <input class="form-control" type="text" placeholder="xxxxxx" name="password" required/>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Resume</label>
                                                <textarea class="form-control" name="resume" rows="3" minlength="100" required></textarea>
                                            </div>
                                            <?php if(date('Y-m-d H:i:s') < $acara->selesai_acara) : ?>
                                            <button class="btn btn-success" type="submit"><i class="fas fa-file-signature"></i> Hadir</button>
                                            <?php endif; ?>
                                        </form>
                                    <?php endif; ?>
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
        $(document).ready(function(){
            $('#ajukan-pertanyaan').click(function(){
                if($('input[name=pertanyaan]').val() != ''){
                    $.ajax({
                        url: "https://api.apispreadsheets.com/data/18346/",
                        method: "POST",
                        data: {"acara": "<?= $acara->nama_acara ?>","nama_mahasiswa":"<?= user()->nama_maba ?>","pertanyaan":$('input[name=pertanyaan]').val()},
                        success: function(){
                            $('input[name=pertanyaan]').val('');
                            alert('Pertanyaan berhasil dicatat.');
                        },
                        error: function(){
                            alert('Pertanyaan gagal dicatat.');
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>