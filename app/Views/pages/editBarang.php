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
                <?php foreach ($kategori as $k) : ?>
                    <option value="<?= $k['idKategori']; ?>" <?= $k['idKategori'] == $barang['idKategori'] ? 'selected' : ''; ?>><?= $k['namaKategori']; ?></option> <!-- Mengubah $produk menjadi $barang -->
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="stokBarang" class="form-label">Stok Barang</label>
            <div class="input-group">
                <button class="btn btn-outline-secondary" type="button" id="button-minus">-</button>
                <input type="text" class="form-control" id="stokBarang" name="stokBarang" value="<?= $barang['stokBarang']; ?>">
                <button class="btn btn-outline-secondary" type="button" id="button-plus">+</button>
            </div>
        </div>
        
<script>
    document.getElementById('button-minus').addEventListener('click', function() {
        let stokBarang = document.getElementById('stokBarang');
        let currentValue = parseInt(stokBarang.value);
        if (!isNaN(currentValue) && currentValue > 0) {
            stokBarang.value = currentValue - 1;
        }
    });

    document.getElementById('button-plus').addEventListener('click', function() {
        let stokBarang = document.getElementById('stokBarang');
        let currentValue = parseInt(stokBarang.value);
        if (!isNaN(currentValue)) {
            stokBarang.value = currentValue + 1;
        }
    });
</script>
        <div class="mb-3">
            <label for="deskripsi" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="<?= $barang['deskripsi']; ?>">
        </div>
        <div class="mb-3">
            <label for="caraPemakaian" class="form-label">Cara Pemakaian</label>
            <input type="text" class="form-control" id="caraPemakaian" name="caraPemakaian" value="<?= $barang['caraPemakaian']; ?>">
        </div>
        <div class="mb-3">
            <label for="komposisiBarang" class="form-label">Komposisi Barang</label>
            <input type="text" class="form-control" id="komposisiBarang" name="komposisiBarang" value="<?= $barang['komposisiBarang']; ?>">
        </div>
        <div class="mb-3">
            <label for="klaimBarang" class="form-label">Klaim Barang</label>
            <input type="text" class="form-control" id="klaimBarang" name="klaimBarang" value="<?= $barang['klaimBarang']; ?>">
        </div>
        <div class="mb-3">
            <label for="tanyaJawab " class="form-label">QnA</label>
            <input type="text" class="form-control" id="tanyaJawab" name="tanyaJawab" value="<?= $barang['tanyaJawab']; ?>">
        </div>
        <div class="mb-3">
            <label for="noBpom" class="form-label">No BPOM</label>
            <input type="text" class="form-control" id="noBpom" name="noBpom" value="<?= $barang['noBpom']; ?>">
        </div>
        <!-- <div class="mb-3">
                    <label for="hargaBarang" class="form-label">Harga Barang</label>
                    <input type="text" name="hargaBarang" class="form-control" id="hargaBarang">
                </div> -->
        <div class="mb-3">
            <label for="hargaBarang" class="form-label">Harga Barang</label> <!-- Mengubah label menjadi "Harga Barang" -->
            <input type="text" class="form-control" id="hargaBarang" name="hargaBarang" value="<?= $barang['hargaBarang']; ?>"> <!-- Mengubah name menjadi hargaBarang dan value dari $produk menjadi $barang -->
        </div>
        <div class="mb-3">
            <label for="gambar" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="gambar" name="gambar" value="<?= $barang['gambar']; ?>">
        </div>



        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?= $this->endSection(); ?>