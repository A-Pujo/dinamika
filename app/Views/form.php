<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

    <style>
        *{
            margin: 0;
            padding: 0;
        }
        
        #header{
            background-color: #112433;
            z-index: 9999;
        }

        .nav .nav-item .nav-link{
            margin-left: 12px;
            border-radius: 16px;
            color: #f8fdf9;
        }

        .nav .nav-item .nav-link:hover{
            color: #064e6e;
            background-color: #f8fdf9;
        }

        .form-container{
            background-color: #112433;
            min-height: 100vh;
        }

        .form-container h3{
            color: #fff;
        }

        label{
            color: #ffa;
        }
        
        @media only screen and (max-width: 530px) {
            .form-gform{
                width: 300px;
                height: 419px;
            }   
        }
    </style>
</head>
<body>
    <div class="container-liquid">
        <div class="d-flex justify-content-center align-items-center px-2 px-sm-5 py-2" id="header">
            <div>
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url() ?>">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="container-fluid form-container">
        <div class="row py-5">
            <div class="col-md-6 mx-auto">
                <h3>Formulir Penugasan</h3>
                <?= form_open_multipart(base_url('/upload'), ['method' => 'post']); ?>
                    <div class="mb-3">
                        <label class="form-label">Nama Lengkap</label>
                        <input class="form-control" type="text" placeholder="Pujo" name="nama" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Kelompok (?)</label>
                        <input class="form-control" type="text" placeholder="Kuli" name="kelompok" required/>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Url dokumen</label>
                        <input class="form-control" type="text" placeholder="http://url" name="dokumen" required/>
                    </div>
                    <!-- <div class="mb-3">
                        <label class="form-label">Upload Penugasan</label>
                        <div class="input-group mb-3">
                            <input class="form-control" type="file" id="formFile" name="fileToUpload" />
                        </div>
                    </div> -->
                    <button class="btn btn-primary" type="submit" id="submit-btn">Submit</button>
                </form>

            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>  
</body>
</html>