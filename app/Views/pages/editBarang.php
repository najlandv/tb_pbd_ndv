<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <h1>Edit Barang</h1> <!-- Mengubah judul menjadi "Edit Barang" -->
    <form action="/pages/updateBarang/<?= $barang['idBarang']; ?>" method="post"> <!-- Mengubah action menjadi updateBarang -->
        <div class="mb-3">
            <label for="namaBarang" class="form-label">Nama Barang</label> <!-- Mengubah label menjadi "Nama Barang" -->
            <input type="text" class="form-control" id="namaBarang" name="namaBarang" value="<?= $barang['namaBarang']; ?>"> <!-- Mengubah name menjadi namaBarang dan value dari $produk menjadi $barang -->
        </div>
        <div class="mb-3">
            <label for="idKategori" class="form-label">Kategori</label>
            <select class="form-control" id="idKategori" name="idKategori">
                <?php foreach ($kategori as $k): ?>
                    <option value="<?= $k['idKategori']; ?>" <?= $k['idKategori'] == $barang['idKategori'] ? 'selected' : ''; ?>><?= $k['namaKategori']; ?></option> <!-- Mengubah $produk menjadi $barang -->
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="hargaBarang" class="form-label">Harga Barang</label> <!-- Mengubah label menjadi "Harga Barang" -->
            <input type="text" class="form-control" id="hargaBarang" name="hargaBarang" value="<?= $barang['hargaBarang']; ?>"> <!-- Mengubah name menjadi hargaBarang dan value dari $produk menjadi $barang -->
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection(); ?>
