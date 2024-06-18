<!-- app/Views/pages/success.php -->
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container mt-5">
    <div class="alert alert-light-purple" role="alert">
        <h2 class="alert-heading">Yeayy! Pesanan Berhasil!</h2>
        <hr>
        <p class="mb-0">Terima kasih telah melakukan pesanan. Silakan cek nota pesanan Anda untuk informasi lebih lanjut.</p>
    </div>
</div>

<?= $this->endSection(); ?>
