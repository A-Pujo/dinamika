<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Kata Sandi</title>
    <link rel="icon" href="<?= base_url('assets/images/LogoDinamika.ico') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .root{
            height: 100vh;
            background-color: #caa;
            overflow: hidden;
        }

        .card-container{
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="root">
        <div class="container-fluid">
            <div class="d-flex justify-content-center align-items-center card-container">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center py-2">Ubah Kata Sandi</h5>
                        <?= form_open(base_url('akun/attempt-ganti'), ['method' => 'post']) ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">id</span>
                                </div>
                                <input type="number" class="form-control" placeholder="nomor regis" name="no_reg" value="<?= user()->no_registrasi ?>" readonly />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&#128273;</span>
                                </div>
                                <input type="password" class="form-control" minlength="6" placeholder="xxxxxx" name="password" value="<?= user()->password ?>" />
                            </div>
                            <button type="submit" class="btn btn-sm btn-success my-2" onclick="confirm('Pastikan kata sandi baru benar-benar anda ingat')">Ubah</button>
                        </form>
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url() ?>" class="card-link"><small>Beranda</small></a>
                            <a href="<?= base_url('portal') ?>" class="card-link"><small>Portal</small></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>