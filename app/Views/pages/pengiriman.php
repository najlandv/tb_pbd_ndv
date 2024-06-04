<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container w-50 mt-5">
    <form action="/pages/savePengiriman" method="post">
        <div class="mb-3">
            <label for="metodePembayaran"  class="form-label">Nama Metode Pengiriman</label>
            <input type="text" name="metodePengiriman" class="form-control" id="metodePembayaran" >
        </div>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
    </form>

    <table class="table mt-5">
  <thead>
    <tr class ="bg-purple">
      <th scope="col" class="text-white" >Nama Metode Pengiriman</th>
      <th scope="col" class="text-white" >Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pengiriman as $pgr):?>
      <tr>
      <td scope="row" style="vertical-align:middle;"><?= $pgr['metodePengiriman']; ?></td> 
      <td scope="row" style="vertical-align:middle;">
      <a href="/pages/editPengiriman/<?= $pgr['Id']; ?>" class="btn btn-warning"><i class="bi bi-pencil-square text-white"></i></a>
      <a href="/pages/deletePengiriman/<?= $pgr['Id']; ?>" class="btn btn-danger"><i class="bi bi-trash"></i></a></td> 
    </tr>
    <?php endforeach;?> 
  </tbody>
</table>

</div>
<?= $this->endSection();?>