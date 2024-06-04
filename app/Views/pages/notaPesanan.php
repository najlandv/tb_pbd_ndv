<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php foreach($pelanggan as $plg): ?>
<?php endforeach; ?>
<?php foreach($penjual as $pjl): ?>
<?php endforeach; ?>
<?php foreach($pemesanan as $pmsn): ?>
<?php endforeach; ?>

<div class="container w-75 mt-5">
        <ul class="list-group">
            <li class="list-group-item"style="padding:20px;">
               <div class="row">
                <p><b>Alamat Pengiriman</b></p>
                <div class="col"style="margin-top:-15px;">
                    <p style="font-size:14px;color:grey;"> <?= user()->username; ?> | <?= user()->email; ?> </p>
                    <p style="width:250px;margin-top:-15px;font-size:14px;color:grey;"><?= $plg['alamatPelanggan']; ?></p>
                </div>
                <div class="col text-end"style="margin-left:150px;">
                <p style="font-size:14px;color:grey;">
                    <?php 
                    date_default_timezone_set('Asia/Jakarta');
                    echo date('d/m/Y');
                    ?>
                </p>
                </div>
               </div>
            </li>
            <li class="list-group-item">
            <div class="row">
                <p style="font-weight:700;"><i style="margin-left: 10px;margin-right:10px; color:grey;" class="bi bi-shop"></i><?= $pjl['namaPenjual']; ?></p>
                        <div class="col-2">
                            <img src="/img/<?= $barang['gambar'];?>" style="width:80px;margin-left:10px;">
                        </div>
                        <div class="col"style="margin-left:10px;">
                            <p style="font-size:18px;font-weight:400;color:#000;"><?= $barang['namaBarang']; ?></p>
                            <p style="margin-top:-15px;font-size:15px;font-weight:400;color:grey;"><?= $pmsn['jumlahBarang']; ?> Barang</p>
                            <p style="margin-top:-15px;font-size:15px;font-weight:400;color:grey;"> Id Barang: <?= $barang['idBarang']; ?></p>
                            
                        </div>
            </li>
            <li class="list-group-item">
                <div class="row">
                    <div class="col-md-5 text-end"style="margin-left:auto;">

                        <p style="font-size:14px;">Total Pesanan :<b style="color:#000;">
                        Rp <?php 
                        $totalHarga = $pmsn['jumlahBarang'] * $barang['hargaBarang'];
                        echo($totalHarga);
                        ?>
                        </b></p>
                    </div>
                </div>
            </li>
            <li class="list-group-item" >
                <p style="font-size:14px; margin-left:10px;"> Metode pembayaran : <b style="color:#000;"><?= $pmsn['metodePembayaran'] ?></b></p>
                <p style="margin-top:-15px;font-size:14px; margin-left:10px;"> Metode pengiriman : <b style="color:#000;"><?= $pmsn['metodePengiriman']; ?></b></p>
            </li>
            <a href="/" class="btn btn-primary mt-3">
    Kembali
</a>

        </ul>
        
</div>
<?= $this->endSection(); ?>