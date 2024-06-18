Codingan detail.php
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php foreach ($pelanggan as $plg) : ?>
<?php endforeach; ?>
<div class="container">
    <div class="container w-100 mt-5">
        <div class="card mb-3" style="max-width: 100%; height:1600px; padding:20px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="/img/<?= $barang['gambar']; ?>" class="img-fluid rounded-start gambar-detail" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body card-body-detail">
                        <p class="card-text klaim-barang-detail"><?= $barang['klaimBarang']; ?></p>
                        <h5 class="card-title nama-barang-detail"><?= $barang['namaBarang']; ?> | <?= $barang['idBarang']; ?></h5>
                        <p class="card-text harga-barang-detail">Rp<?= $barang['hargaBarang']; ?></p>
                    </div>
                    <div class="card-body card-body-detail">
                        <h6 class="card-title judul-deskripsi" style="font-weight: bold;">DESKRIPSI BARANG</h6>
                        <div class="deskripsi-barang-container">
                            <p class="card-text deskripsi-barang" style="font-size: 16px; line-height: 1.6; color: #333;">
                                <?= $barang['deskripsi']; ?>
                            </p>
                        </div>
                    </div>

                    <div class="card-body card-body-detail">
                        <!-- <h6 class="card-title detail-barang" style="font-weight: bold;">DETAIL BARANG</h6> -->
                        <div class="row w-75 detail-row mt-4">
                            <div class="col">
                                <!-- <div class="detail-item">
        <p class="detail-label" style="background-color: #6a1b9a; color: #fff; font-weight: bold; padding: 5px;">Nama Barang</p>
        <p class="sub-title"><?= $barang['namaBarang']; ?></p>
    </div> -->
                                <div class="detail-item">
                                    <p class="detail-label" style="background-color: #6a1b9a; color: #fff; font-weight: bold; padding: 5px;">Cara Pemakaian</p>
                                    <p class="sub-title"><?= $barang['caraPemakaian']; ?></p>
                                </div>
                                <div class="detail-item">
                                    <p class="detail-label" style="background-color: #6a1b9a; color: #fff; font-weight: bold; padding: 5px;">Komposisi</p>
                                    <p class="sub-title"><?= $barang['komposisiBarang']; ?></p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="detail-item">
                                    <p class="detail-label" style="background-color: #6a1b9a; color: #fff; font-weight: bold; padding: 5px;">QnA</p>
                                    <p class="sub-title"><?= $barang['tanyaJawab']; ?></p>
                                </div>
                                <div class="detail-item">
                                    <p class="detail-label" style="background-color: #6a1b9a; color: #fff; font-weight: bold; padding: 5px;">No BPOM</p>
                                    <p class="sub-title"><?= $barang['noBpom']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
                <form action="/pages/savePesanan" method="post">
                    <div class="container w-100 my-3 con-alamat">
                        <div class="row w-100 ">
                            <div class="col sub-con-alamat">
                                <p style="font-size:15px;font-weight:600;color:rgb(91, 91, 91);"><i class="bi bi-geo-alt-fill"></i> Alamat Pengiriman</p>
                                <p style="font-size:15px;font-weight:400;color:grey;"> <?= $plg['alamatPelanggan']; ?></p>
                            </div>
                            <div class="col sub-con-metodePembayaran">
                                <label for="metodePembayaran" class="form-label" style="font-size:15px;font-weight:600;color:rgb(91, 91, 91);">Pembayaran</label>
                                <div class="input-group">
                                    <select name="metodePembayaran" class="form-select form-select-sm w-75 metode-pem-sel" id="metodePembayaran" required>
                                        <option selected disabled>Pilih Metode Pembayaran</option>
                                        <?php foreach ($pembayaran as $pmb) : ?>
                                            <option value="<?= $pmb['metodePembayaran']; ?>"><?= $pmb['metodePembayaran']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <input type="text" name="idBarang" id="idBarang" value="<?= $barang['idBarang'] ?>" hidden>
                            </div>

                            <div class="col sub-con-metodePembayaran" style="margin-left:10px;">
                                <label for="metodePengiriman" class="form-label" style="font-size:15px;font-weight:600;color:rgb(91, 91, 91);">Pengiriman</label>
                                <div class="input-group">
                                    <select name="metodePengiriman" class="form-select form-select-sm w-75 metode-pem-sel" id="metodePengiriman" required>
                                        <option selected disabled>Pilih Metode Pengiriman</option>
                                        <?php foreach ($pengiriman as $png) : ?>
                                            <option value="<?= $png['metodePengiriman']; ?>"><?= $png['metodePengiriman']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row w-75">
                                    <div class="col sub-con-alamat">
                                        <p style="font-size: 15px; font-weight: 600; color: rgb(91, 91, 91);">SHOP <i style="margin-left: 10px; margin-right: 5px;" class="bi bi-shop"></i>Somethinc</p>
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="/img/<?= $barang['gambar']; ?>" style="width: 60px;">
                                            </div>
                                            <div class="d-flex flex-row grid gap-3 justify-start item-center col-6" style="margin-left: auto; margin-right: 300px;">
                                                <p style="font-size: 14px; font-weight: 400; color: #000; margin-top: 100; margin-right: 10px;"><?= $barang['namaBarang'] ?></p>
                                                <span style="font-size: 13px; color: #222; margin-right: 5px; margin-top: 200;">Jumlah Barang</span>
                                                <input type="number" placeholder="1" value="" min="1" name="jumlahBarang" id="jumlahBarang" style="padding-left: 10px; font-size: 13px; border: 1px solid #222; width: 50px; border-radius: 50px; height: 25px; outline: none;">
                                            </div>



                                            <hr class="my-5">
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <p style="font-size: 16px; font-weight: 500; color: rgb(91, 91, 91);">Harga Barang</p>
                                            </div>
                                            <div class="col">
                                                <p style="font-size: 18px; font-weight: 700; color: rgb(26, 59, 109);">Rp <?= $barang['hargaBarang']; ?></p>
                                            </div>
                                        </div>
                                    </div>

                                    <?php if (logged_in()) : ?>
                                        <button type="submit" class="btn mt-3 btn-primary" style="background-color: purple; border-color: purple; width: 100%;">
                                            <i class="fas fa-shopping-cart"></i> Buat Pesanan
                                        </button>
                                        <?= anchor(
                                            'pages/notaPesanan/' . $barang['idBarang'],
                                            '<i class="fas fa-file-invoice"></i> Cek Nota Pesanan',
                                            ['class' => 'btn btn-primary mt-3', 'style' => 'width: 100%; background-color: blue; border-color: blue;']
                                        ) ?>
                                    <?php else :  ?>
                                        <a href="/login" class="btn btn-primary mt-3" style="width: 100%;">
                                            <i class="fas fa-shopping-cart"></i> Buat Pesanan
                                        </a>
                                    <?php endif; ?>


                                </div>
                                <?= $this->endSection(); ?>