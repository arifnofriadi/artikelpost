<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendafataran Akun | ArtikelPost</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bs-icon/bootstrap-icons.css') ?>">
</head>
<body>
    
    <div class="container mt-5 col-3 card card-body shadow-lg rounded">
        <div class="row justify content-md-center">
            <h4 class="card-title">Buat akun</h4>

                <?php if(isset($validation)):?>
                    <div class="alert alert-warning">
                        <?= $validation->listErrors() ?>
                    </div>
                <?php endif;?>

            <form action="<?php echo site_url('/register') ?>" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-person-badge-fill"></i>
                    </span>
                    <input type="text" name="name" id="name" class="form-control" placeholder="Nama" value="<?= set_value('name') ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" value="<?= set_value('email') ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-key-fill"></i>
                    </span>
                    <input type="text" name="password" id="password" class="form-control" placeholder="Kata Sandi">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-key-fill"></i>
                    </span>
                    <input type="text" name="confirmpassword" id="confirmpassword" placeholder="Ulangi kata sandi" class="form-control">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </div>
                <div class="text-center text-black-50 mt-1">
                    Sudah punya akun? <a href="<?php echo site_url('/login') ?>" class="text-danger">Masuk</a>
                </div>
            </form>
        </div>
    </div>

<script src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>