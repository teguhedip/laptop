<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Brand >> </th>
            <th scope="col"><?= $lp['brand'] ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">Tipe >> </th>
            <td><?= $lp['tipe'] ?></td>
        </tr>
        <tr>
            <th scope="row">Status >> </th>
            <td><?= $lp['status'] ?></td>
        </tr>
        <tr>
            <th>
                <a href="<?= base_url('lp/laptop') ?>" class="btn btn-primary btn-sm" target="">Kembali</a>
            </th>
            <th></th>
        </tr>
    </tbody>
</table>

<?= $this->endSection() ?>