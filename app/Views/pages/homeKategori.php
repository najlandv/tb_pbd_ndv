<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class=" mx-5 text-center w-100 mt-5 grid">
  <?php foreach ($barang as $b) : ?>
    <a href="/pages/<?= $b['idBarang']; ?>" class="a-barang" style="text-align:center;object-fit:cover;">
      <div class="card card-barang p-3" style="height:20rem;">
        <img src="/img/<?= $b['gambar']; ?>" class="card-img-top" alt="...">
        <div class="card-body" style="position:absolute;bottom:20px;">
          <p class="card-title klaim-barang"><?= $b['klaimBarang']; ?></p>
          <p class="card-title nama-barang" style="font-weight: bold;"><?= $b['namaBarang']; ?></p>
          <p class="card-text harga-barang">Rp<?= $b['hargaBarang']; ?></p>
        </div>
      </div>
    </a>
  <?php endforeach; ?>
</div>


<div class="container mt-5">
  <p class="text-center" style="font-size: 13px; color: #6a1b9a; font-weight: bold; text-shadow: 2px 2px 4px rgba(106, 27, 154, 0.5);">
    <a href="/pages/aboutUs" style="text-decoration: none; color: #0060ae; font-size: 17px; font-weight: 700; transition: color 0.3s;">
      Contact Us
    </a>
    <br><br>
    <span style="display: block; font-size: 14px; color: #333;">
      © 2024 PT Beaute Haul Indonesia
    </span>
  </p>
</div>



<?= $this->endSection(); ?>