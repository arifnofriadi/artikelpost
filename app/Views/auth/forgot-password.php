<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Kata Sandai</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bs-icon/bootstrap-icons.css') ?>">
</head>
<body>

    <div class="container mt-5 col-3 card card-body shadow-lg rounded">
        <div class="row justify content-md-center">
            <h4 class="card-title">Reset kata sandi</h4>
            <p>Kami memerlukan email anda untu mengirim link reset kata sandi.</p>

            <form action="" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">
                        <i class="bi bi-envelope-fill"></i>
                    </span>
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Kirim link</button>
                </div>
                <div class="text-center text-black-50 mt-1">
                    Atau buat akun baru? <a href="<?php echo site_url('/register') ?>" class="text-danger">Daftar</a>
                </div>
            </form>
        </div>
    </div>

<script src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>