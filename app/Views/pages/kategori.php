<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <a href="/" class="btn btn-primary mx-3 my-3">Kembali</a>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="container w-100 mt-5 con-buku">
                <?php $validation = \Config\Services::validation(); ?>
                <form action="/pages/saveKategori" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="idKategori" class="form-label">Id Kategori</label>
                        <input type="text" name="idKategori" class="form-control" id="idKategori">
                        <?php if ($validation->getError('idKategori')) { ?>
                            <div class='alert alert-danger mt-2'>
                                <?= $error = $validation->getError('idKategori'); ?>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="mb-3">
                        <label for="namaKategori" class="form-label">Nama Kategori</label>
                        <input type="text" name="namaKategori" class="form-control" id="namaKategori">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambahkan Kategori</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
