<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <form action="/pages/saveEditPelanggan/<?= $pelanggan['email'] ?>" method="post" >
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" id="email" value="<?= $pelanggan['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="alamatPelanggan" class="form-label">Alamat Pelanggan</label>
                <input type="text" name="alamatPelanggan" class="form-control" id="alamatPelanggan" value="<?= $pelanggan['alamatPelanggan']; ?>">
            </div>
            <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
    </form>
</div>
<?= $this->endSection();?>