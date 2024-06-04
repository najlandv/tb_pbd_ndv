<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
<h1>Data Kategori</h1>

    <table class="table mt-5">
        <thead>
            <tr class="bg-secondary">
                <th scope="col" class="text-white">ID Kategori</th>
                <th scope="col" class="text-white">Nama Kategori</th>
                <th scope="col" class="text-white">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($kategori as $k): ?>
                <tr>
                    <td scope="row" style="vertical-align:middle;"><?= $k['idKategori']; ?></td>
                    <td scope="row" style="vertical-align:middle;"><?= $k['namaKategori']; ?></td>
                    <td scope="row" style="vertical-align:middle;">
                        <a href="/pages/editKategori/<?= $k['idKategori']; ?>" class="btn btn-warning btn-sm"><i class="bi bi-pencil-square"></i> Edit</a> <!-- Tambahkan ikon untuk tombol Edit -->
                        <a href="/pages/hapusKategori/<?= $k['idKategori']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus kategori ini?');"><i class="bi bi-trash"></i> Hapus</a> <!-- Tambahkan ikon untuk tombol Hapus -->
                    </td>
                </tr>
            <?php endforeach; ?> 
        </tbody>
    </table>
</div>
<?= $this->endSection(); ?>
