<nav class="navbar navbar-light pt-0" style="background:#fff;box-shadow: rgba(0, 0, 0, 0.1) 0px 4px 12px;">
    <img src="/img/bg-sm.svg" alt="Somethinc">
    <div class="container-fluid container" style="justify-content:space-around;">

        <a class="navbar-brand" href="/">
            <img src="/img/logo.png" width="150" class="d-inline-block align-text-top">
        </a>

        <?php if (logged_in()) : ?>
            <a class="navbar-brand" href="/pages/pelanggan">
                <i class="bi bi-person-circle" style="color:#0060ae; font-size:28px;"></i>
            </a>
            <a href="/logout">Logout</a>
            <?php if (in_groups('admin')) : ?>
                <div class="sidebar" id="sidebar">
                    <button class="close-btn" id="close-btn">&times;</button>
                    <a class="sidebar-item" href="/pages/kategori"><i class="fas fa-plus-circle"></i> Tambah Kategori</a>
                    <a class="sidebar-item" href="/pages/listKategori"><i class="fas fa-list-alt"></i> Data Kategori</a>
                    <a class="sidebar-item" href="/pages/barang"><i class="fas fa-plus-square"></i> Tambah Barang</a>
                    <a class="sidebar-item" href="/pages/listBarang"><i class="fas fa-boxes"></i> Data Barang</a>
                    <a class="sidebar-item" href="/pages/pembayaran"><i class="fas fa-credit-card"></i> Pembayaran</a>
                    <a class="sidebar-item" href="/pages/pengiriman"><i class="fas fa-shipping-fast"></i> Pengiriman</a>
                </div>
                <button class="open-btn" id="open-btn">&#9776;</button>
            <?php endif; ?>
        <?php else : ?>
            <a href="/login">
                <i class="bi bi-person" style="color:#0060ae; font-size:28px;"></i>
            </a>
        <?php endif; ?>
    </div>
</nav>

<style>
  .sidebar {
    width: 200px;
    position: fixed;
    height: 100%;
    left: -200px; /* Hide the sidebar by default */
    top: 0;
    background-color: #f2f2f2;
    padding-top: 60px;
    transition: 0.3s;
    z-index: 10;
  }

  .sidebar a {
    padding: 10px 15px;
    text-decoration: none;
    font-size: 17px;
    color: #000;
    display: block;
    border-left: 5px solid transparent;
    transition: 0.3s;
  }

  .sidebar a:hover {
    background-color: #ddd;
    border-left: 5px solid #800080; /* Warna ungu untuk border saat hover */
  }

  .sidebar a i {
    margin-right: 10px;
    color: #800080; /* Warna ungu untuk ikon */
  }

  .open-btn {
    font-size: 30px;
    cursor: pointer;
    position: fixed;
    top: 20px;
    left: 20px;
    color: #800080;
    background: none;
    border: none;
  }

  .close-btn {
    font-size: 30px;
    cursor: pointer;
    position: absolute;
    top: 20px;
    right: 20px;
    background: none;
    border: none;
  }
</style>

<script>
  document.getElementById("open-btn").onclick = function() {
    document.getElementById("sidebar").style.left = "0";
  }

  document.getElementById("close-btn").onclick = function() {
    document.getElementById("sidebar").style.left = "-200px";
  }
</script>

<!-- Include Bootstrap JS for the dropdown functionality -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
