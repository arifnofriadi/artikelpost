<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel Post | Kumpulan Fakta Menarik</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('style.css') ?>">
</head>
<body>
    <nav class="navbar navbar-expand-lg text-primary border-bottom shadow">
        <div class="container-fluid">
            <a href="" class="navbar-brand">Todoeas</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a href="<?= site_url('/login') ?>" class="nav-link btn btn-outline-primary login-btn">
                            Sign in
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('/register') ?>" class="nav-link btn btn-primary text-white">
                            Sign up
                        </a>
                    </li>
                </ul>
                <div class="d-flex">
                    <input type="search" name="keyword" id="keyword" placeholder="Search" class="form-control" aria-label="Search">
                </div>
            </div>
        </div>
    </nav>

    <?php if($artikels): ?>
        <?php foreach($artikels as $artikel): ?>
            <div class="container mt-5 mb-3 p-4 rounded shadow">
                <h4><?php echo $artikel['title'] ?></h4>
                <p><?php echo $artikel['description'] ?></p>
            </div>
        <?php endforeach; ?>
        <?php elseif($artikel === null): ?>
            <div class="container mt-5 mb-3 rounded shadow">
                <h4>Tidak ada data.</h4>
            </div>
    <?php endif; ?>



    <script src="<?php echo base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>