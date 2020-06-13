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
      <h1>
        Data Tables
        <small>- Daftar Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <a href="<?php echo site_url("Barang_import_admin/form") ?>"class="btn btn-primary"><i class="fa fa-plus-circle"></i> Import barang</a>
          <table id="example2" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Tipe</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Tag</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
            </tr>
            </thead>
            <tbody>
              <?php
                if( ! empty($import)){
                  foreach($import as $data){
                    echo "<tr>";
                    echo "<td>".$data->id_pr."</td>";
                    echo "<td>".$data->nama_pr."</td>";
                    echo "<td>".$data->tipe_pr."</td>";
                    echo "<td class='text-right'>".number_format($data->harga_pr,0)."</td>";
                    echo "<td>".$data->stock_pr."</td>";
                    echo "<td>".$data->tag_pr."</td>";
                    echo "<td>".$data->decs_pr."</td>";
                    echo "<td>".$data->img_pr."</td>";
                    echo "</tr>";
                  }
                }else{
                  echo "<tr><td colspan='7'>Data tidak ada</td></tr>";
                }
              ?>
            </tbody>
            <tfoot>
            <tr>
              <th>Id</th>
              <th>Nama</th>
              <th>Tipe</th>
              <th>Harga</th>
              <th>Stock</th>
              <th>Tag</th>
              <th>Deskripsi</th>
              <th>Gambar</th>
            </tr>
            </tfoot>
          </table>
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

<!-- page script -->
<script>
  $(document).ready(function () {
        $('#example2').DataTable({
            dom: 'Bfrtip',
        });
      })
</script>
</body>
</html>
