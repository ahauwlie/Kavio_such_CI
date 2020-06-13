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
  <style type="text/css">
    input[type="file"], input[type="submit"]{
      display: none;
    }
  </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php echo $preloader; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Form Import
        <small>- Import Barang</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Upload</a></li>
        <li class="active">Import Barang</li>
      </ol>
    </section>


     <!-- class="form-group btn btn-primary browse m-l-5" -->
    <!-- Main content -->
    <section class="content">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <form method="post" action="<?php echo site_url("Barang_import_admin/form") ?>" enctype="multipart/form-data">
            <a href="<?php echo base_url("excel/import_data.xlsx"); ?>"class="btn btn-primary"><i class="fa fa-download"></i> Download Format</a><br><br>
            <input id="pilih_file" type="file" name="file">
            <label for="pilih_file" class="form-group btn btn-info browse m-l-5">
              <i class="fa fa-download"> Pilih File</i>
            </label>
            <input type="submit" name="preview" id="ok">
            <label for="ok" class="form-group btn btn-warning browse m-l-5">
              <i class="fa fa-download"> Lihat data(Import)</i>
            </label>
          </form>
          <?php
            if(isset($_POST['preview'])){ 
              if(isset($upload_error)){ 
                echo "<div style='color: red;'>".$upload_error."</div>"; 
                die; 
              }
              
              echo "<form method='post' action='".site_url("Barang_import_admin/import")."'>";
              
              echo "<table border='1' cellpadding='8'>
              <tr>
                <th colspan='9'>Preview Data</th>
              </tr>
              <tr>
                <th>Nama</th>
                <th>Tipe</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Tag</th>
                <th>Deskripsi</th>
                <th>Gambar</th>
              </tr>";
              
              $numrow = 1;
              $kosong = 0;

              foreach($sheet as $row){ 
                $nama_pr = $row['A']; 
                $tipe_pr = $row['B']; 
                $harga_pr = $row['C']; 
                $stock_pr = $row['D'];
                $tag_pr = $row['E']; 
                $decs_pr = $row['F']; 
                $img_pr = $row['G'];
                
                if(empty($nama_pr) && empty($tipe_pr) && empty($harga_pr) && empty($stock_pr) && empty($tag_pr) && empty($decs_pr) && empty($img_pr))
                  continue;
                
                if($numrow > 1){
                  $nama_pr_td = ( ! empty($nama_pr))? "" : " style='background: #E07171;'"; 
                  $tipe_pr_td = ( ! empty($tipe_pr))? "" : " style='background: #E07171;'"; 
                  $harga_pr_td = ( ! empty($harga_pr))? "" : " style='background: #E07171;'";
                  $stock_pr_td = ( ! empty($stock_pr))? "" : " style='background: #E07171;'"; 
                  $tag_pr_td = ( ! empty($tag_pr))? "" : " style='background: #E07171;'"; 
                  $decs_pr_td = ( ! empty($decs_pr))? "" : " style='background: #E07171;'";
                  $img_pr_td = ( ! empty($img_pr))? "" : " style='background: #E07171;'"; 
                  
                  if(empty($nama_pr) or empty($tipe_pr) or empty($harga_pr) or empty($stock_pr) or empty($tag_pr) or empty($decs_pr) or empty($img_pr)){
                    $kosong++; 
                  }
                  
                  echo "<tr>";
                  echo "<td".$nama_pr_td.">".$nama_pr."</td>";
                  echo "<td".$tipe_pr_td.">".$tipe_pr."</td>";
                  echo "<td".$harga_pr_td.">".$harga_pr."</td>";
                  echo "<td".$stock_pr_td.">".$stock_pr."</td>";
                  echo "<td".$tag_pr_td.">".$tag_pr."</td>";
                  echo "<td".$decs_pr_td.">".$decs_pr."</td>";
                  echo "<td".$img_pr_td.">".$img_pr."</td>";
                  echo "</tr>";
                }
                
                $numrow++; 
              }
              
              echo "</table>";
              
              if($kosong > 0){
              ?>  
                <script>
                $(document).ready(function(){
                  $("#jumlah_kosong").html('<?php echo $kosong; ?>');
                  
                  $("#kosong").show();
                });
                </script>
              <?php
              }else{ 
                echo "<hr>";
                echo "<button type='submit' name='import'>Import</button>";
                echo "<a href='".site_url("Barang_import_admin")."'>Cancel</a>";
              }
              
              echo "</form>";
            }
            ?>
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
<script src="<?php echo base_url('assets/js/jquery.js'); ?>"></script>
  
  <script>
  $(document).ready(function(){
    // Sembunyikan alert validasi kosong
    $("#kosong").hide();
  });
  </script>
</body>
</html>
