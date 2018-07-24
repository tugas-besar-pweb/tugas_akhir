<!DOCTYPE html>
<html lang="en">
<head>
    <?php $this->load->view('admin/header'); ?>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <a class="navbar-brand" href="#">Belajar CRUD</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
            <a class="nav-link" href="<?php echo base_url() ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        </div>
    </nav>	

<?php 
	echo "Sukses Simpan Data";

	echo anchor('pegawai', 'Masukan Data Lagi'); 
?>
</body>
</html>