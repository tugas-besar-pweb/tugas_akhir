<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
<!-- <style>
	table{
		border-collapse: collapse;
		width: 70%;
		margin: 0 auto;
	}
	table th{
		border:1px solid #000;
		padding: 3px;
		font-weight: bold;
		text-align: center;
	}
	table td{
		border:1px solid #000;
		padding: 3px;
		vertical-align: top;
	}

</style> -->
</head>

<body>
	<p style="text-align: center">Laporan Pegawai</p>
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
						              <h4>Masuk</h4>
                        <?php } else { ?>
                          <h4>Pulang</h4>
                        <?php } ?>
                      </td>
                      <!-- <span class="label label-success"></span> -->
                      <!-- <span style="text-fonts:16px" class="label label-danger"></span> -->
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
			  <p style="text-align: center"><a href="<? echo base_url()?>index.php/Cetak/cetakPdf">Cetak Data</a></p>

</body>

</html>