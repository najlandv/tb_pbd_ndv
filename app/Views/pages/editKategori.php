<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <h1>Edit Kategori</h1>
    <form action="/pages/updateKategori/<?= $kategori['idKategori']; ?>" method="post">
        <div class="mb-3">
            <label for="idKategori" class="form-label">ID Kategori</label>
            <input type="text" class="form-control" id="idKategori" name="idKategori" value="<?= $kategori['idKategori']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="namaKategori" class="form-label">Nama Kategori</label>
            <input type="text" class="form-control" id="namaKategori" name="namaKategori" value="<?= $kategori['namaKategori']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection(); ?>
