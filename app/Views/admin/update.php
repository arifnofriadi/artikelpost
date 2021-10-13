<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Artikel</title>
    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('bs-icon/bootstrap-icons.css') ?>">
</head>
<body>
<nav class="navbar navbar-expand-l navbar-dark bg-dark shadow">
    <div class="container-fluid">
        <div>
            <i class="bi bi-book-half text-primary"></i>
            <a href="<?php echo site_url('/') ?>" class="navbar-brand">Artikel Post</a>
        </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-control="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a href="<?= site_url('/dashboard') ?>" class="nav-link active">
                            <i class="bi bi-journals"></i> Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('/users') ?>" class="nav-link active">
                            <i class="bi bi-people-fill"></i> Anggota
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= site_url('/logout') ?>" class="nav-link active">
                            <i class="bi bi-power"></i> Keluar
                        </a>
                    </li>
                </ul>
    </div>
</nav>

<div class="container mt-5 col-8">
    <div class="card me-auto rounded shadow">
        <div class="card-header">
            <h5 class="card-title">Perbarui data artikel</h5>
        </div>
        <div class="card-body">
            <form action="<?php echo site_url('update') ?>" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $artikel['id'] ?>">
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-fonts"></i>
                    </span>
                    <input type="text" name="title" placeholder="Judul" class="form-control" value="<?php echo $artikel['title'] ?>">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">
                        <i class="bi bi-file-text"></i>
                    </span>
                    <textarea name="description" id="description" cols="30" rows="5" placeholder="Isi" class="form-control"><?php echo $artikel['description'] ?></textarea>
                </div>
                <div class="d-gridrow">
                    <button class="btn btn-primary w-25" type="submit">Simpan</button>
                    <a href="<?php echo site_url('/dashboard') ?>" class="btn btn-warning w-25">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="<?= base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>