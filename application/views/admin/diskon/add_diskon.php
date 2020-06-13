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
      <h1>Tambah Diskon Baru</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Tambah Diskon Baru</li>
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
                    <label>Jenis Diskon</label>
                    <input name="jenis_diskon" id="jenis_diskon" type="text" maxlength="100" class="form-control" required>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <label>Jumlah Diskon</label>
                    <select name="jumlah_diskon" id="jumlah_diskon" class="form-control select-search m-t-4" required>
                      <option value="" disabled>Pilih kategori...</option>
                      <option value="0.9">10%</option>
                      <option value="0.8">20%</option>
                      <option value="0.7">30%</option>
                      <option value="0.6">40%</option>
                      <option value="0.65">35%</option>
                      <option value="0.75">25%</option>
                      <option value="0.95">5%</option>
                      <option value="0.85">15%</option>
                      <option value="0.5">50%</option>
                    </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="form-group">
                    <button class="btn btn-info">Tambah</button>
                    <a href="<?php echo site_url('Diskon_admin/index'); ?>" class="btn btn-danger">Batal</a>
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
