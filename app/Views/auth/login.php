<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang | ArtikelPost</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bs-icon/bootstrap-icons.css') ?>">
</head>
<body>

    <div class="container mt-5 col-3 card card-body shadow-lg rounded">
        <div class="row justify content-md-center">
            <h4 class="card-title">Masuk untuk melanjutkan</h4>

                <?php if(session()->getFlashdata('msg')):?>
                    <div class="alert alert-warning">
                        <?= session()->getFlashdata('msg') ?>
                    </div>
                <?php endif;?>

            <form action="<?php site_url('/login') ?>" method="post">
                <div class="input-group mb-3">
                  <span class="input-group-text" id="basic-addon1">
                      <i class="bi bi-envelope-fill"></i>
                  </span>
                  <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="<?= set_value('name') ?>">
                </div>
                <div class="input-group mb-1">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-key-fill"></i>
                    </span>
                    <input type="password" name="password" id="password" placeholder="Password" class="form-control">
                </div>
                <div class="mb-3">
                    <a href="<?php echo site_url('/forgot-password') ?>" class="text-danger">Lupa kata sandi?</a>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Masuk</button>
                </div>
                <div class="text-center text-black-50 mt-1">
                    Tidak punya akun? <a href="<?php echo site_url('/register') ?>" class="text-danger">Daftar</a>
                </div>
            </form>
        </div>
    </div>
    
    <script src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>