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
      <h1>Tambah User Baru</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Tambah User Baru</li>
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
                    <label>Id Ugrup</label>
                    <select name="idug" id="idug" class="form-control select-search m-t-4" required>
                      <option value="" disabled>Pilih kategori...</option>
                      <option value="1">Admin</option>
                      <option value="2">Marketing</option>
                      <option value="3">Publikasi</option>
                      <option value="4">User</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input name="uname" id="uname" type="text" maxlength="32" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input name="pass" id="pass" type="text" max="16" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input name="fnama" id="fnama" type="text" max="100" class="form-control" required>
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input name="email" id="email" type="text" max="150" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input name="hp" id="hp" type="number" class="form-control" required>
                </div>
                <div class="form-group p-t-4">
                    <label>Foto</label>
                    <input name="foto" id="foto" type="text" maxlength="255" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Tanggal Lahir</label>
                    <input name="ultah" id="ultah" type="text" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Alamat</label>
                    <input name="alamat" id="alamat" type="text" maxlength="255" class="form-control">
                </div>
                <div class="form-group p-t-4">
                    <label>Aktif</label>
                    <input name="active" id="active" type="number" max="2" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Tambah</button>
                    <a href="<?php echo site_url('User_manage_admin/index'); ?>" class="btn btn-danger">Batal</a>
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
