<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<?php foreach($pelanggan as $p): ?>
<?php endforeach; ?>



<div class="container w-75 mt-5 con-pelanggan ">
    <img src="/img/OIP.jpg" width="250">
    <div class="card-body">
    <h5 class="card-title"><?= user()->username; ?></h5>
    <h6 class="card-subtitle mb-2 text-muted"><?= $p['email']; ?></h6>
    <h6 class="card-subtitle mb-2 text-muted"> <?= $p['alamatPelanggan']; ?></h6>
    <a href="/" class="card-link">&laquo Kembali</a>
  </div>

      <!-- Button trigger modal -->
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Edit alamat
      </button>

</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Ubah</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <form action="/pages/savePelanggan" method="post" >
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="hidden" name="id" class="form-control" id="id" value="<?= $p['id']; ?>">
                <input type="text" name="email" class="form-control" id="email" value="<?= $p['email']; ?>">
                <div class="mb-3">
    <label for="namaJalan" class="form-label">Nama Jalan, RT/RW, dan lainnya</label>
    <input type="text" name="namaJalan" id="namaJalan" class="form-control" oninput="updateAlamat()">
</div>

<div class="mb-3">
    <label for="kelurahan" class="form-label">Kelurahan</label>
    <input list="list-kelurahan" type="text" name="kelurahan" id="kelurahan" class="form-control" oninput="updateAlamat()">
    <datalist id="list-kelurahan">
        <!-- Opsi kelurahan -->
        <option value="Kelurahan Cupak">
    </datalist>
</div>

<div class="mb-3">
    <label for="kecamatan" class="form-label">Kecamatan</label>
    <input list="list-kecamatan" type="text" name="kecamatan" id="kecamatan" class="form-control" oninput="updateAlamat()">
    <datalist id="list-kecamatan">
        <!-- Opsi kecamatan -->
        <option value="Kecamatan Pauh">
    </datalist>
</div>

<div class="mb-3">
    <label for="kotaKab" class="form-label">Kota/Kabupaten</label>
    <input list="list-kota" type="text" name="kotaKab" id="kotaKab" class="form-control" oninput="updateAlamat()">
    <datalist id="list-kota">
        <option value="Jakarta">
        <option value="Padang">
    </datalist>
</div>

<div class="mb-3">
    <label for="provinsi" class="form-label">Provinsi</label>
    <input list="list-provinsi" type="text" name="provinsi" id="provinsi" class="form-control" oninput="updateAlamat()">
    <datalist id="list-provinsi">
        <!-- Opsi provinsi -->
        <option value="DKI Jakarta">
        <option value="Sumatera Barat">
    </datalist>
</div>

<div class="mb-3">
    <label for="negara" class="form-label">Negara</label>
    <input list="list-negara" type="text" name="negara" id="negara" class="form-control" oninput="updateAlamat()">
    <datalist id="list-negara">
        <!-- Opsi negara -->
        <option value="Indonesia">
        <option value="Malaysia">
    </datalist>
</div>

<div class="mb-3">
    <label for="kodePos" class="form-label">Kode Pos</label>
    <input type="text" name="kodePos" id="kodePos" class="form-control" oninput="updateAlamat()">
</div>

<div class="mb-3">
    <label for="alamatPelanggan" class="form-label">Alamat Pelanggan</label>
    <input type="text" name="alamatPelanggan" class="form-control" id="alamatPelanggan" readonly>
</div>

<script>
    function updateAlamat() {
        const namaJalan = document.getElementById('namaJalan').value;
        const kelurahan = document.getElementById('kelurahan').value;
        const kecamatan = document.getElementById('kecamatan').value;
        const kotaKab = document.getElementById('kotaKab').value;
        const provinsi = document.getElementById('provinsi').value;
        const negara = document.getElementById('negara').value;
        const kodePos = document.getElementById('kodePos').value;

        const alamatPelangganInput = document.getElementById('alamatPelanggan');
        alamatPelangganInput.value = `${namaJalan}, ${kelurahan}, ${kecamatan}, ${kotaKab}, ${provinsi}, ${negara}, ${kodePos}`;
    }
</script>

            <div class="modal-footer">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
            </form>
      </div>

    </div>
  </div>
</div>



<?= $this->endSection();?>

