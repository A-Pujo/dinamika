<?= view('__portal-header') ?>
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
                                            <label class="form-label">Apakah Jaringan Saudara Kondisinya Baik?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_1" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_1" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Apakah Saudara Menggunakan Laptop?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_2" value="Ya">
                                                <label class="form-check-label">
                                                    Ya
                                                </label>
                                            </div>
                                                <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_2" value="Tidak">
                                                <label class="form-check-label">
                                                    Tidak
                                                </label>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Skill Apa yang Saudara Pilih?</label>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_3" value="Digital Tools">
                                                <label class="form-check-label">
                                                    Digital Tools
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_3" value="Research">
                                                <label class="form-check-label">
                                                    Research
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="pil_3" value="Public Speaking">
                                                <label class="form-check-label">
                                                    Public Speaking
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
                                            <th>Jaringan Baik</th>
                                            <th>Menggunakan Laptop</th>
                                            <th>Pilihan Skill</th>
                                        </thead>
                                        <tbody>
                                            <?php foreach($sheet as $sh) : ?>
                                                <?php if($sh->no_reg == user()->no_reg) : ?>
                                                    <tr>
                                                        <td><?= $sh->jaringan_baik ?></td>
                                                        <td><?= $sh->menggunakan_laptop ?></td>
                                                        <td><?= $sh->pilihan_skill ?></td>
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
            <?= view('__portal-footer') ?>
</body>
</html>