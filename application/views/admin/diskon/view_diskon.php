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
        <small>- Kelola Diskon</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Kelola Diskon</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <a href="<?php echo site_url('Diskon_admin/addDiskon') ?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Diskon</a>
          <table id="productTable" class="table table-bordered table-hover">
            <thead>
            <tr>
              <th>Id</th>
              <th>Jenis Diskon</th>
              <th>Jumlah Diskon</th>
              <th>Aksi</th>
            </tr>
            </thead>
            <tbody>
            <?php
              foreach ($diskon as $row) {
                  echo "<tr>";
                  echo "<td>".$row['id_disc']."</td>";
                  echo "<td>".$row['jenis_disc']."</td>";
                  echo "<td>".$row['jum_disc']."</td>";
                  echo "<td class='text-center'>";
                  echo "<a href='".site_url('Diskon_admin/edit/').$row['id_disc']."'><i class='fa fa-pencil'></i></a> ";
                  echo "<a href='".site_url('Diskon_admin/detail/').$row['id_disc']."'><i class='fa fa-eye'></i></a> ";
                  echo "<a href='#' data-id='".$row['id_disc']."' data-name='".$row['jenis_disc']."' class='sweet-confirm'><i class='fa fa-trash'></i></a>";
                  echo "</td>";
                  echo "</tr>";
              }
            ?>
            </tbody>
            <tfoot>
            <tr>
              <th>Id</th>
              <th>Jenis Diskon</th>
              <th>Jumlah Diskon</th>
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
  <div style="display: none">
    <form id="delete-form" method="POST"></form>
  </div>
</div>
<!-- ./wrapper -->

<?php echo $js; ?>
<!-- Datatable & buttons -->
<script src="<?php echo base_url('/assets/js/admin/barang/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/admin/barang/buttons.flash.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/admin/barang/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/admin/barang/pdfmake.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/admin/barang/vfs_fonts.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/admin/barang/buttons.html5.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/admin/barang/buttons.print.min.js'); ?>"></script>
<!-- Delete alert -->
<script src="<?php echo base_url('/assets/js/admin/barang/sweetalert.min.js'); ?>"></script>
<!-- Modified buttons -->
<script>
    $(document).ready(function () {
        $('#productTable').DataTable({
            dom: 'Bfrtip',
            buttons: [{ //customized datatable button
                extend: "excel",
                text: "<br><button><i class='fa fa-table'>Excel</i></button> ",
                exportOptions: {
                    columns: ":not(:last-child)"
                }
            }, {
                extend: "pdf",
                text: "<button><i class='fa fa-file-pdf-o'>Pdf</i></button> ",
                exportOptions: {
                    columns: ":not(:last-child)"
                }
            }, {
                extend: "print",
                text: "<button><i class='fa fa-print'>Print</i></button> ",
                exportOptions: {
                    columns: ":not(:last-child)"
                }
            }]
        });
        $('#productTable tbody').on('click', '.sweet-confirm', function (e) {
            e.preventDefault();
            var id = $(this).data('id');
            var name = $(this).data('name');
            swal({
                    title: "Konfirmasi",
                    text: "Apakah Anda yakin akan menghapus produk " + name + "?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#DD6B55",
                    confirmButtonText: "Ya",
                    cancelButtonText: "Tidak",
                    closeOnConfirm: true
                },
                function(){
                    $('#delete-form').attr('action', '<?php echo site_url('Diskon_admin/delete/'); ?>' + id).submit();
                });
        });
    })
</script>
</body>
</html>
