<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
<div class="container w-100 mt-5 con-barang">
    <?php $validation = \Config\Services::validation(); ?>
    <div class="row">
        <div class="col-lg-9">
            <form action="/pages/saveBarang" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label for="idBarang" class="form-label">Id Barang</label>
                    <input type="text" name="idBarang" class="form-control " id="idBarang">
                    <?php if ($validation->getError('idBarang')) { ?>
                        <div class='alert alert-danger mt-2'>
                            <?= $error = $validation->getError('idBarang'); ?>
                        </div>
                    <?php } ?>
                </div>
                <div class="mb-3">
                    <label for="namaBarang" class="form-label">Nama Barang</label>
                    <input type="text" name="namaBarang" class="form-control" id="namaBarang">
                </div>
                <!-- Input select untuk kategori -->
                <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <select name="kategori" class="form-control" id="kategori">
                        <?php foreach ($kategori as $k) : ?>
                            <option value="<?= $k['idKategori']; ?>"><?= $k['namaKategori']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <!-- Akhir input untuk kategori -->
                <div class="mb-3">
                    <label for="stokBarang" class="form-label">Stok Barang</label>
                    <input type="text" name="stokBarang" class="form-control" id="stokBarang">
                </div>
                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi</label>
                    <input type="text" name="deskripsi" class="form-control" id="deskripsi">
                </div>
                <div class="mb-3">
                    <label for="caraPemakaian" class="form-label">Cara Pemakaian</label>
                    <input type="text" name="caraPemakaian" class="form-control" id="caraPemakaian">
                </div>
                <div class="mb-3">
                    <label for="komposisiBarang" class="form-label">Komposisi Barang</label>
                    <input type="text" name="komposisiBarang" class="form-control" id="komposisiBarang">
                </div>
                <div class="mb-3">
                    <label for="klaimBarang" class="form-label">Klaim Barang</label>
                    <input type="text" name="klaimBarang" class="form-control" id="klaimBarang">
                </div>
                <div class="mb-3">
                    <label for="tanyaJawab " class="form-label">QnA</label>
                    <input type="text" name="tanyaJawab" class="form-control" id="tanyaJawab">
                </div>
                <div class="mb-3">
                    <label for="noBpom" class="form-label">No BPOM</label>
                    <input type="text" name="noBpom" class="form-control" id="noBpom">
                </div>
                <div class="mb-3">
                    <label for="hargaBarang" class="form-label">Harga Barang</label>
                    <input type="text" name="hargaBarang" class="form-control" id="hargaBarang">
                </div>
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="gambar">
                </div>
                <button type="submit" class="btn btn-primary" style="background-color: deeppink; border-color: deeppink;">Tambahkan Barang</button>
            </form>
        </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>