<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<?php foreach($penjual as $pjl): ?>
<?php endforeach; ?>
<div class="container mt-5">
    <div class="row">
        <div class="col">
            <h1 class="aboutUs mb-5">Store<br> Locator</h1>
            <p style="font-weight:700;font-size:17px;">Nama Tempat</p>
            <p style="width:250px;font-size:14px;margin-top:-15px;color:grey;"><?= $pjl['namaPenjual']; ?></p>
            <p style="font-weight:700;font-size:17px;">Location</p>
            <p style="width:250px;font-size:14px;margin-top:-15px;color:grey;"><?= $pjl['alamatPenjual']; ?></p>
            <p style="font-weight:700;font-size:17px;">Email</p>
            <p style="font-size:14px;margin-top:-15px;color:grey;"><?= $pjl['emailPenjual']; ?></p>
            <p style="font-weight:700;font-size:17px;">Social Media</p>
            <p style="font-size:14px;margin-top:-15px;color:grey;"><?= $pjl['socialMedia']; ?></p>
        </div>
        <div class="col">
            <img src="/img/Somethinc-Sogo-Jakarta.jpg" width="500">
        </div>
    </div>
</div>


<?= $this->endSection(); ?>
