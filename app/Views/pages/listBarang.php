<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <h1>Data Barang</h1>
    <table class="table mt-5">
        <thead>
            <tr class ="bg-purple"> 
                <th scope="col" class="text-white" >ID</th>
                <th scope="col" class="text-white" > Nama Barang </th>
                <th scope="col" class="text-white" > Gambar Barang </th>
                <th scope="col" class="text-white" > Stok Barang </th>
                <!-- <th scope="col" class="text-white" > Deskripsi </th> -->
                <th scope="col" class="text-white" > Klaim Barang </th>
                <th scope="col" class="text-white" > Harga Barang </th>
                <th scope="col" class="text-white" > Aksi </th> <!-- Tambah kolom untuk aksi -->
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barang as $b):?>
            <tr>
                <td scope="row" style="vertical-align:middle;"><?= $b['idBarang']; ?></td> 
                <td scope="row" style="vertical-align:middle;"><?= $b['namaBarang']; ?></td> 
                <td scope="row" style="vertical-align:middle;"><img src="/img/<?= $b['gambar']; ?>" width="150"></td> 
                <td scope="row" style="vertical-align:middle;"><?= $b['stokBarang']; ?></td> 
                <td scope="row" style="vertical-align:middle;"><?= $b['klaimBarang']; ?></td> 
                <td scope="row" style="vertical-align:middle;">Rp <?= $b['hargaBarang']; ?>.00</td> 
                <td scope="row" style="vertical-align:middle;">
                    <!-- Tambah link untuk aksi edit dan hapus -->
                    <a href="/pages/editBarang/<?= $b['idBarang']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square text-white"></i></a>
                    <a href="/pages/hapusBarang/<?= $b['idBarang']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td> 
            </tr>
            <?php endforeach;?> 
        </tbody>
    </table>
</div>
<?= $this->endSection();?>
