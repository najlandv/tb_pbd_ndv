<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <form action="/pages/saveEditPengiriman/<?= $pengiriman['Id']; ?>" method="post">
        <div class="mb-3">
            <label for="metodePembayaran"  class="form-label">Nama Metode Pembayaran</label>
            <input type="text" name="metodePengiriman" class="form-control" id="metodePembayaran" value="<?= $pengiriman['metodePengiriman']; ?>">
        </div>
        <button type="submit" class="btn btn-primary">Ubah</button>
    </form>
</div>
<?= $this->endSection();?>