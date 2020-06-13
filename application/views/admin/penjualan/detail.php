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
      <h1>Detail Penjualan</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Detail Penjualan</li>
      </ol>
      <button><a href="<?php echo site_url('Penjualan_admin'); ?>"> Kembali</a></button>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="row">
            <?php foreach ($penjualan_detail as $user) : ?>
              <div class="col-lg-6">
                <div class="container">
                  <div class="panel panel-primary col-lg-6">
                    <div class="form-group">
                        <label>Id Tarnsaksi</label>
                        <p class="form-control-static"><?php echo $user['id_tr']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Id Detail</label>
                        <p class="form-control-static"><?php echo $user['id_td']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Id Produk</label>
                        <p class="form-control-static"><?php echo $user['id_pr']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nama produk</label>
                        <p class="form-control-static"><?php echo $user['nama_pr']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Jumlah beli</label>
                        <p class="form-control-static"><?php echo $user['qty']; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <p class="form-control-static"><?php echo $user['harga_td']; ?></p>
                    </div>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
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
