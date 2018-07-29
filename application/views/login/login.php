<!DOCTYPE HTML>
<html>
<head>
<title>Login Absensi</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="<?php echo base_url().'assets/css/style.css'?>" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="<?php echo base_url().'assets/css/font-awesome.css'?>" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="<?php echo base_url().'assets/css/icon-font.min.css'?>" type='text/css' />
<!-- //lined-icons -->
<script src="<?php echo base_url().'assets/js/jquery-1.10.2.min.js'?>"></script>
<!--clock init-->
</head> 
<body>
								<!--/login-->
								
									   <div class="error_page">
												<!--/login-top-->
												
													<div class="error-top">
													<h2 class="inner-tittle page">Welcome</h2>
													    <div class="login">
														<h3 class="inner-tittle t-inner">Login</h3>
																

 <form action="<?php echo site_url(); ?>login/proseslog" id="form-login" method="post" accept-charset="utf-8">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="nama_user" id="nama_user" placeholder="Nama Pengguna" required/>
            </span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" value="" name="pass_user" id="pass_user" placeholder="Password" required/>
            </span>
          </div>
          <div class="row">
          <?php if(!empty($this->session->userdata('info'))) {echo $this->session->userdata('info');}?>
          
          <div class="submit"><input placeholder="Login"type="submit"></div>
          </form>
</div>

														
</div>


<!--//login-top-->
</div>

<!--//login-->
<!--footer section start-->
<div class="footer">
<p>&copy Adinda Dwi L & M Qolbil Atiq </p>
</div>
<!--footer section end-->
<!--/404-->
<!--js -->
<script src="<?php echo base_url().'assets/js/jquery.nicescroll.js'?>"></script>
<script src="<?php echo base_url().'assets/js/scripts.js'?>"></script>
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</body>
</html>


