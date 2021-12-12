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
                    <strong><?= $lp['brand'] ?></strong><br>
                </td>
                <td>
                    <strong><?= $lp['type'] ?></strong><br>
                </td>
                <td>
                    <strong><?= $lp['status'] ?></strong><br>
                </td>
                <td>
                    <a href="<?= base_url('lp/preview/' . $lp['id']) ?>" class="btn btn-sm btn-outline-secondary" target="">Preview</a>
                    <a href="<?= base_url('lp/edit/' . $lp['id']) ?>" class="btn btn-sm btn-outline-secondary">Edit</a>
                    <a href="#" data-href="<?= base_url('lp/delete/' . $lp['id']) ?>" onclick="confirmToDelete(this)" class="btn btn-sm btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<div id="confirm-dialog" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <h2 class="h2">Are you sure?</h2>
                <p>The data will be deleted and lost forever</p>
            </div>
            <div class="modal-footer">
                <a href="#" role="button" id="delete-button" class="btn btn-danger">Delete</a>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
    function confirmToDelete(el) {
        $("#delete-button").attr("href", el.dataset.href);
        $("#confirm-dialog").modal('show');
    }
</script>


<?= $this->endSection() ?>