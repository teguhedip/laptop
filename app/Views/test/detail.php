<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<div class="card" style="width: 18rem;">
    <img src="<?= base_url('img') ?>/laptop.jpg" class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title">Detail Laptop <?= $lp['brand'] . " " .  $lp['type']  ?></h5>
        <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
    </div>
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Type : <?= $lp['type']  ?></li>
        <li class="list-group-item">Status : <?= $lp['status']  ?></li>
        <li class="list-group-item">Sistem Operasi : <?= $lp['sistem_operasi']  ?></li>
        <li class="list-group-item">Prosesor : <?= $lp['processor']  ?></li>
        <li class="list-group-item">Display : <?= $lp['display']  ?></li>
    </ul>
    <div class="card-body">
        <a href="<?= base_url('/') ?>" class="card-link">Kembali</a>
        <!-- <a href="#" class="card-link">Another link</a> -->
    </div>
</div>

<?= $this->endSection() ?>