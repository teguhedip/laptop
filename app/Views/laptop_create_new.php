<?= $this->extend('layout/page_layout') ?>

<?= $this->section('content') ?>

<form action="" method="post" id="text-editor">
    <div class="form-group">
        <label for="brand">Brand</label>
        <input type="text" name="brand" class="form-control" placeholder="Isikan nama brand ..." required>
    </div>
    <div class="form-group">
        <input type="text" name="type" class="form-control" placeholder="Tipe laptop kamu.."></input>
    </div>

    <select class="form-select" name="status">
        <option value="work" selected>Work</option>
        <option value="gammer">Gammer</option>
        <option value="education">Education</option>
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