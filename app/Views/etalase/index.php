<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Brand</th>
            <th>Tipe</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lp_all as $lp) : ?>
            <tr>
                <td><?= $lp['id'] ?></td>
                <td>
                    <?= $lp['brand'] ?><br>
                </td>
                <td>
                    <?= $lp['type'] ?><br>
                </td>
                <td>
                    <?= $lp['status'] ?><br>
                </td>
                <td>
                    <a href="<?= base_url('detail/' . $lp['id']) ?>" type="button" class="btn btn-primary" target="">Detail</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>
<?= $this->endSection() ?>