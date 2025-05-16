<?php
session_start();
if (!isset($_SESSION['ssLoginPOS'])) {
  header("location: ../auth/login.php");
  exit();
}

require '../config/config.php';
require '../config/functions.php';
require '../module/mode-user.php';

$title = 'Tambah User | Market PPLG';
require '../template/header.php';
require '../template/navbar.php';
require '../template/sidebar.php';

if (isset($_POST['simpan'])) {
  if (insert($_POST) > 0) {
    echo "<script>alert('User baru berhasil diregistrasi')</script>";
  }
}
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Barang</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= $main_url ?>dashboard.php">Home</a></li>
            <li class="breadcrumb-item"><a href="<?= $main_url ?>user/data-user.php">Barang</a></li>
            <li class="breadcrumb-item active">Add Barang</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card">
        <form action="" method="post" enctype="multipart/form-data">
          <div class="card-header">
            <h3 class="card-title"><i class="fas fa-plus fa-sm"></i> Add Barang</h3>
            <button type="submit" name="simpan" class="btn btn-primary btn-sm float-right"><i class="fas fa-save"></i>
              Simpan</button>
            <button type="reset" class="btn btn-danger btn-sm float-right mr-1"><i class="fas fa-times"></i>
              Reset</button>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-8 mb-3">
                <div class="form-group">
                  <label for="username">Kode</label>
                  <input type="text" name="kode" id="username" class="form-control" placeholder="Masukan Username"
                    autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="username">Barcode</label>
                  <input type="text" name="barcode" id="fullname" class="form-control"
                    placeholder="Masukan Nama Lengkap" autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="username">Nama Barang</label>
                  <input type="text" name="nama barang" id="password" class="form-control"
                    placeholder="Masukan Password" autofocus autocomplete="off" required>
                </div>
                <div class="form-group">
                  <label for="level">satuan</label>
                  <select name="harga beli" id="level" class="form-control" required>
                    <option value="">pilihan</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                  </select>
                </div>
                 <div class="form-group">
                  <label for="username"> harga beli</label>
                  <input type="number" name="nama barang" id="password" class="form-control"
                    placeholder="Masukan Password" autofocus autocomplete="off" required>
                </div>
                  <div class="form-group">
                  <label for="username"> harga jual</label>
                  <input type="number" name="nama barang" id="password" class="form-control"
                    placeholder="Masukan Password" autofocus autocomplete="off" required>
                </div>
                  <div class="form-group">
                  <label for="username"> stok minimal</label>
                  <input type="number" name="nama barang" id="password" class="form-control"
                    placeholder="Masukan Password" autofocus autocomplete="off" required>
                </div>
              </div>
              <div class="col-lg-4 text-center">
                <img src="<?= $main_url ?>assets/image/547031.png" class="profile-user-img img-circle mb-3" alt="User">
                <input type="file" name="image" class="form-control">
                <span class="text-sm">Type file gambar JPG | PNG | GIF</span><br>
                <span class="text-sm">Width = Height</span>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
</div>
<?php require '../template/footer.php'; ?>