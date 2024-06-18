<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="p-5" style="margin-left: 220px;">
    <h1 class="mb-4" style="color: #4B0082;">
        <i class="fas fa-tachometer-alt"></i> Admin Dashboard
    </h1>
    
    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-primary custom-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-box"></i> Total Barang
                    </h5>
                    <p class="card-text"><?= isset($barang) ? count($barang) : 0; ?> Barang</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-primary custom-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-tags"></i> Kategori
                    </h5>
                    <p class="card-text"><?= isset($kategori) ? count($kategori) : 0; ?> Kategori</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-primary custom-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-shopping-cart"></i> Total Pemesanan
                    </h5>
                    <p class="card-text"><?= isset($pemesanan) ? count($pemesanan) : 0; ?> Pemesanan</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-primary custom-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-shipping-fast"></i> Total Pengiriman
                    </h5>
                    <p class="card-text"><?= isset($pengiriman) ? count($pengiriman) : 0; ?> Pengiriman</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-primary custom-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-credit-card"></i> Total Pembayaran
                    </h5>
                    <p class="card-text"><?= isset($pembayaran) ? count($pembayaran) : 0; ?> Pembayaran</p>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card text-white bg-primary custom-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="fas fa-users"></i> Total Pelanggan
                    </h5>
                    <p class="card-text"><?= isset($pelanggan) ? count($pelanggan) : 0; ?> Pelanggan</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- <div class="row mt-4">
        <div class="col-md-12">
            <h2 style="color: #4B0082;">
                <i class="fas fa-history"></i> Recent Activities
            </h2>
            <table class="table table-hover" style="border: 1px solid #4B0082;">
                <thead style="background-color: #800080; color: white;">
                    <tr>
                        <th scope="col"><i class="fas fa-tasks"></i> Activity</th>
                        <th scope="col"><i class="fas fa-calendar-alt"></i> Date</th>
                    </tr>
                </thead>
                <tbody>
                    Tambahkan baris untuk aktivitas terbaru di sini
                </tbody>
            </table>
        </div>
    </div> -->
</div>
<?= $this->endSection(); ?>

<style>
  .custom-card {
    height: 150px; /* Adjust the height as needed */
    background-color: #800080; /* Background color */
  }

  .custom-card .card-body {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    padding: 10px;
  }

  .custom-card .card-title {
    font-size: 1.2em;
  }

  .custom-card .card-text {
    font-size: 1em;
  }
</style>
