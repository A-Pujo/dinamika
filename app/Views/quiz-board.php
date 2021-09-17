<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuis</title>
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

    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>