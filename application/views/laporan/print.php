<!DOCTYPE html>
<html>
<head>
	<title>Laporan</title>
	<!-- <style>
		table{
			border-collapse: collapse;
			width: 100%;
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
	<table>
		<tr>
            <th>Jam Masuk</th>
            <th>Tanggal</th>
            <th>Nama Karyawan</th>
            <th>Jabatan</th>
		</tr>
		<?php foreach ($data_absensi as $key) {
			?>
			<tr>
				<td><?php echo $key->jammasuk ?></td>
				<td><?php echo $key->tanggal ?></td>
				<td><?php echo $key->nama_kar ?></td>
				<td><?php echo $key->jabatan ?></td>
				<!-- <td><?php echo $key->status ?></td> -->
				<!-- <td>
                        <?php if ($row['kodeabsensi'] == 1) { ?>
						              <h4>Masuk</h4>
                        <?php } else { ?>
                          <h4>Pulang</h4>
                        <?php } ?>
                      </td> -->
			</tr>
		<?php } ?>
	</table>
</body>

</html>