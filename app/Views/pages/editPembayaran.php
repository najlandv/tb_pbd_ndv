<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <form action="/pages/saveEditPembayaran/<?= $pembayaran['Id']; ?>" method="post">
        <div class="mb-3">
            <label for="metodePembayaran"  class="form-label">Nama Metode Pembayaran</label>
            <input type="text" name="metodePembayaran" class="form-control" id="metodePembayaran" value="<?= $pembayaran['metodePembayaran']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
<?= $this->endSection();?>