<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Data Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <?php echo $css; ?>
  <link href="<?php echo base_url('assets/css/admin/sweetalert.css'); ?>" rel="stylesheet">
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Tambah Barang Baru</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Tambah Barang Baru</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Nama Barang</label>
                    <input name="nama" id="nama" type="text" maxlength="19" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Tipe Barang</label>
                    <select name="tipe" id="tipe" class="form-control select-search m-t-4" required>
                      <option value="" disabled>Pilih kategori...</option>
                      <option value="Kopi">Kopi</option>
                      <option value="Filter">Filter</option>
                      <option value="Kopi_1kg">Kopi_1kg</option>
                      <option value="Biji_kopi">Biji_kopi</option>
                      <option value="Alat_seduh">Alat_seduh</option>
                      <option value="Mesin_Kopi">Mesin_Kopi</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Harga (Rp)</label>
                    <input name="harga" id="harga" type="number" max="9" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Stock Barang</label>
                    <input name="stock" id="stock" type="number" max="3" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                  <label>Tag Barang</label>
                  <select name="tag" id="tag" class="form-control select-search m-t-4" required>
                    <option value="" disabled>Pilih kategori...</option>
                    <option value="kopi_indo">kopi_indo</option>
                    <option value="sruput_coffee">sruput_coffee</option>
                    <option value="kopi_luar_kiloan">kopi_luar_kiloan</option>
                    <option value="kopikelas">kopikelas</option>
                    <option value="biji_kopi_berkualitas">biji_kopi_berkualitas</option>
                    <option value="filterdulubosq">filterdulubosq</option>
                    <option value="bikin_kopi">bikin_kopi</option>
                    <option value="kopi_kiloan_indo">kopi_kiloan_indo</option>
                    <option value="mesin_kopi">mesin_kopi</option>
                    <option value="manakuatt!!">manakuatt!!</option>
                  </select>
                </div>
                <div class="form-group p-t-4">
                    <label>Deskripsi Barang</label>
                    <input name="decs" id="decs" type="text" maxlength="255" class="form-control" required>
                </div>
                <div class="form-group p-t-4">
                    <label>Photo Barang</label>
                    <input name="img" id="img" type="text" maxlength="255" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Tambah</button>
                    <a href="<?php echo site_url('Barang_admin/index'); ?>" class="btn btn-danger">Batal</a>
                </div>
              </div>
            </div>
          </form>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php echo $footer; ?>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>

<script src="<?php echo base_url('/assets/js/admin/barang/bootstrap_select.min.js'); ?>"></script>
</body>
</html>
