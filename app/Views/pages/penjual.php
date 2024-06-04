<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <form action="/pages/savePenjual" method="post">
        <div class="mb-3">
            <label for="namaPenjual"  class="form-label">Nama Penjual</label>
            <input type="text" name="namaPenjual" class="form-control" id="namaPenjual" >
        </div>
        <div class="mb-3">
            <label for="alamatPenjual"  class="form-label">Alamat Penjual</label>
            <input type="text" name="alamatPenjual" class="form-control" id="alamatPenjual" >
        </div>
        <div class="mb-3">
            <label for="emailPenjual" class="form-label">Email Penjual</label>
            <input type="email" name="emailPenjual"  class="form-control" id="emailPenjual" >
        </div>
        <div class="mb-3">
            <label for="socialMedia"  class="form-label">Social Media</label>
            <input type="text"name="socialMedia" class="form-control" id="socialMedia" >
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
<?= $this->endSection();?>