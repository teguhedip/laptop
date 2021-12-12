<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <input type="hidden" name="id" value="<?= $lp['id'] ?>" />
    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" name="brand" class="form-control" placeholder="Isikan nama brand ..." value="<?= $lp['brand'] ?>" required>
    </div>
    <div class="form-group">
        <input type="text" name="type" class="form-control" placeholder="Tipe laptop kamu.." value="<?= $lp['type'] ?>"></input>
    </div>

    <select class="form-select" name="status">
        <option <?php echo $lp['status'] == 'education' ? "selected" : ""; ?> value="education">Education</option>
        <option <?php echo $lp['status'] == 'work' ? "selected" : ""; ?> value="work">Work</option>
        <option <?php echo $lp['status'] == 'gammer' ? "selected" : ""; ?> value="gammer">Gammer</option>
    </select>


    <div class="from-group mt-3">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </div>



    <!-- <div class="form-group mt-5">
        <button type="submit" name="status" value="published" class="btn btn-primary">Publish</button>
        <button type="submit" name="status" value="draft" class="btn btn-secondary">Save to Draft</button>
    </div> -->
</form>


<?= $this->endSection() ?>