<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class=" mx-4 w-100 mt-5">
  <div id="carouselExampleIndicators" class="carousel slide w-100 " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="6" aria-label="Slide 7"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="7" aria-label="Slide 8"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="8" aria-label="Slide 9"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="9" aria-label="Slide 10"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/img/home1.jpg" class="d-block w-100" alt="home1">
      </div>
      <div class="carousel-item">
        <img src="/img/home2.jpg" class="d-block w-100" alt="home2">
      </div>
      <div class="carousel-item">
        <img src="/img/home3.jpg" class="d-block w-100" alt="home3">
      </div>
      <div class="carousel-item">
        <img src="/img/home4.jpg" class="d-block w-100" alt="home4">
      </div>
      <div class="carousel-item">
        <img src="/img/home5.jpg" class="d-block w-100" alt="home5">
      </div>
      <div class="carousel-item">
        <img src="/img/home6.jpg" class="d-block w-100" alt="home6">
      </div>
      <div class="carousel-item">
        <img src="/img/home7.jpg" class="d-block w-100" alt="home7">
      </div>
      <div class="carousel-item">
        <img src="/img/home8.jpg" class="d-block w-100" alt="home8">
      </div>
      <div class="carousel-item">
        <img src="/img/home9.jpg" class="d-block w-100" alt="home9">
      </div>
      <div class="carousel-item">
        <img src="/img/home10.jpg" class="d-block w-100" alt="home10">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>

<div class="px-4 mt-4">
  <div class="row">
    <div class="col-md-4">
      <img src="/img/gambar1.jpg" class="img-fluid" alt="Content 1">
    </div>
    <div class="col-md-4">
      <img src="/img/gambar2.jpg" class="img-fluid" alt="Content 2">
    </div>
    <div class="col-md-4">
      <img src="/img/gambar3.jpg" class="img-fluid" alt="Content 3">
    </div>
  </div>
</div>
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