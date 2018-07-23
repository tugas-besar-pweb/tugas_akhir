<?php $this->load->view('member/header'); ?>

<body>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
      <?php echo form_open('pegawai/create'); ?>
      <legend>Tambah Data Pegawai</legend>
      <?php echo validation_errors(); ?>

      <div class="form-group">
        	<label for="">Nama</label>
        <input type="text" class="form-control" name="nama" placeholder="Input field">
            <label for="">Alamat</label>
        <input type="text" class="form-control" name="alamat" placeholder="Input field">
            <label for="">Nip</label>
        <input type="text" class="form-control" name="nip" placeholder="Input field">
            <label for="">Tgl Lahir</label>
        <input type="Date" class="form-control" name="tglLahir" placeholder="Date">

      </div>
      <button type="submit" class="btn btn-primary">submit</button>
      <?php echo form_close(); ?>
    </div>

</body>
</html>