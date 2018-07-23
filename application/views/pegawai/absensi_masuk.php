<?php $this->load->view('pegawai/header'); ?>

<body>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php echo form_open('pegawai/create'); ?>
      <legend>Absensi Masuk</legend>
      <?php echo validation_errors(); ?>

      <div class="form-group">
        	<label for="">NIP</label>
        <input type="text" class="form-control" name="nip" placeholder="Input field">
            <label for="">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Input field">
            <label for="">Status Aktif</label>
        <input type="text" class="form-control" name="status_aktif" placeholder="Input field">
            <label for="">Jadwal</label>
        <input type="Date" class="form-control" name="jadwal" placeholder="Date">
            <label for="">Jam</label>
        <input type="Date" class="form-control" name="jam" placeholder="Date">

      </div>
      <button type="submit" class="btn btn-primary">submit</button>
      <?php echo form_close(); ?>
    </div>

</body>
</html>