<!DOCTYPE html>
<html>
<head>
  <link href="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
  <?php $this->load->view('inc/head'); ?>
  
</head>
<body class="skin-blue">
  <!-- wrapper di bawah footer -->
  <div class="wrapper">

    <?php $this->load->view('inc/head2'); ?>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <?php $this->load->view('inc/sidebar'); ?>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          <b>DATA KARYAWAN</b>
          <br>
          <!-- <select class="form-control" style="width:300px">
          	<option>--Pilih Bulan--</option>
          	<option>Jan</option>
          	<option>Feb</option>
          	<option>Mar</option>
          	<option>Apr</option>
          	<option>Mei</option>
          	<option>Jun</option>
          	<option>Jul</option>
          	<option>Aug</option>
          	<option>Sep</option>
          	<option>Okt</option>
          	<option>Nov</option>
          	<option>Des</option>
          </select>
          <select class="form-control" style="width:300px">
          	<option>--Pilih Tahun--</option>
          	<option>2016</option>
          	<option>2017</option>
            <option>2018</option>
          </select> -->
          <br>
          <!-- <a href="<?php echo base_url()?>index.php/Cetak/index">Lihat Data</a></p> -->
          
          <a href="<?php echo base_url()?>index.php/Cetak/cetakPdf">Cetak Data</a></p>

        </h1>
          <!-- <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol> -->
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-md-12">
            <!-- <a style="margin-bottom:3px" href="<?php echo base_url(); ?>karyawan/addkaryawan" class="btn btn-primary no-radius dropdown-toggle"><i class="fa fa-plus"></i> TAMBAH KARYAWAN </a> -->
              <div class="box">
                <!-- <span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
                <span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span> -->
                <div class="box-title">
                  
                </div><!-- /.box-title -->
                <div class="box-body">
                 <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>NIP</th>
                      <th>NAMA</th>
                      <th>JABATAN</th>
                      <th>TANGGAL</th>
                      <th>JAM</th>
                      <th>STATUS</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $no=0; foreach($data_absensi as $row) { $no++ ?>
                    <tr>
                      <td><?php echo $no; ?></td>
                      <td><?php echo $row['nippos']; ?></td>
                      <td><?php echo $row['nama_kar']; ?></td>
                      <td><?php echo $row['jabatan']; ?></td>
                      <td><?php echo $row['tanggal']; ?></td>
                      <td><?php echo $row['jammasuk']; ?></td>
                      <td>
                        <?php if ($row['kodeabsensi'] == 1) { ?>
						              <h4><span class="label label-success">Masuk</span></h4>
                        <?php } else { ?>
                          <h4><span style="text-fonts:16px" class="label label-danger">Pulang</span></h4>
                        <?php } ?>
                      </td>
                      
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div><!-- /.box -->
          </div><!-- /.col -->
        </div><!-- /.row -->
        <!-- Main row -->
      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <footer class="main-footer">
      <div class="pull-right hidden-xs">
        <!-- <b>Version</b> 2.0 -->
      </div>
      <strong>Copyright &copy; 2015 <a href="#"></a></strong>
    </footer>
  </div><!-- ./wrapper -->
  <!-- page script -->
  

    
    <?php $this->load->view('inc/footer'); ?>
    <script src="<?php echo base_url(); ?>assets/dist/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="<?php echo base_url(); ?>assets/dist/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script type="text/javascript">
      $(function() {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": true,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
            //waktu flash data :v
      $(function(){
      $('#pesan-flash').delay(4000).fadeOut();
      $('#pesan-error-flash').delay(5000).fadeOut();
      });
    </script>
</body>
</html>