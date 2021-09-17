<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
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
                        <?php if(session()->has('no_reg')) : ?>
                        <h6 class="card-subtitle mb-2 text-success text-center">Login Berhasil!</h6>
                        <?php else : ?>
                        <h5 class="card-title text-center py-2">Login</h5>
                        <?= form_open(base_url('akun/login-attempt'), ['method' => 'get']) ?>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">id</span>
                                </div>
                                <input type="number" class="form-control" placeholder="nomor regis" name="no_reg" />
                            </div>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">&#128273;</span>
                                </div>
                                <input type="password" class="form-control" placeholder="xxxxxx" name="password" />
                            </div>
                            <button type="submit" class="btn btn-sm btn-success my-2">Login</button>
                        </form>
                        <?php endif; ?>
                        <div class="d-flex justify-content-between">
                            <a href="<?= base_url() ?>" class="card-link" style="text-decoration: none;"><small>Beranda</small></a>
                            <?php if(session()->has('no_reg')) : ?>
                            <a href="<?= base_url('akun/ganti-password') ?>" class="card-link" style="text-decoration: none;"><small>Ganti Kata Sandi</small></a>
                            <?php endif; ?>
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