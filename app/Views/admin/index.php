<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard | Artikel Post</title>
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
<div class="container mt-5">
    <div class="mb-1">
        <a href="#collapsePost" class="btn btn-primary"
        data-bs-toggle="collapse"
        role="button"
        aria-expanded="false"
        aria-controls="collapsePost">
            <i class="bi bi-plus"></i> Tambah artikel
        </a>

        <div class="collapse" id="collapsePost">
            <div class="card card-body">
                <form action="<?= site_url('/create') ?>" method="post">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-fonts"></i>
                        </span>
                        <input type="text" class="form-control" placeholder="Judul" name="title">
                    </div>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-file-text"></i>
                        </span>
                        <textarea name="description" id="description" cols="30" rows="5" placeholder="Isi" class="form-control"></textarea>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <table class="table table-bordered table-striped text-white me-auto mt-2">
        <thead class="bg-dark">
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Isi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody class="text-black">
            <?php if($artikels): ?>
                <?php $i=1; foreach($artikels as $artikel): ?>
                    <tr>
                        <td><?php echo $i++ ?></td>
                        <td><?php echo $artikel['title'] ?></td>
                        <td><?php echo $artikel['description'] ?></td>
                        <td>
                            <a href="<?php echo site_url('/update/'.$artikel['id']) ?>">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a href="<?php echo site_url('/delete/'.$artikel['id']) ?>">
                                <i class="bi bi-trash-fill text-danger"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php elseif($artikel === null): ?>
                <tr>
                    <td colspan="3" class="text-center">Tidak ada data ditemukan.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<script src="<?= base_url('js/bootstrap.bundle.js') ?>"></script>
</body>
</html>