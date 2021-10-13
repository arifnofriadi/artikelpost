<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
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
        <table class="table table-bordered table-striped me-auto text-white">
            <thead class="bg-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody class="text-black">
                <?php if($users): ?>
                    <?php $i=1; foreach($users as $user): ?>
                        <tr>
                            <td><?php echo $i++ ?></td>
                            <td><?php echo $user['name'] ?></td>
                            <td><?php echo $user['email'] ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php elseif($user === null): ?>
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